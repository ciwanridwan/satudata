<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use App\Galery;
use App\Data;
use App\InfoGrapik;
use App\Publikasi;
use App\Visitor;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ipUser()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function userAgent()
    {
	if(empty($_SERVER['HTTP_USER_AGENT'])) {
	return array(
            'userAgent' => '',
            'name'      => '',
            'version'   => '',
            'platform'  => '',
            'pattern'   => ''
        );
	}
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname       = 'Unknown';
        $platform     = 'Unknown';
        $version     = "";

        $os_array   =   array(
            '/windows nt 10.0/i'     =>  'Windows 10',
            '/windows nt 6.2/i'     =>  'Windows 8',
            '/windows nt 6.1/i'     =>  'Windows 7',
            '/windows nt 6.0/i'     =>  'Windows Vista',
            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
            '/windows nt 5.1/i'     =>  'Windows XP',
            '/windows xp/i'         =>  'Windows XP',
            '/windows nt 5.0/i'     =>  'Windows 2000',
            '/windows me/i'         =>  'Windows ME',
            '/win98/i'              =>  'Windows 98',
            '/win95/i'              =>  'Windows 95',
            '/win16/i'              =>  'Windows 3.11',
            '/macintosh|mac os x/i' =>  'Mac OS X',
            '/mac_powerpc/i'        =>  'Mac OS 9',
            '/linux/i'              =>  'Linux',
            '/ubuntu/i'             =>  'Ubuntu',
            '/iphone/i'             =>  'iPhone',
            '/ipod/i'               =>  'iPod',
            '/ipad/i'               =>  'iPad',
            '/android/i'            =>  'Android',
            '/blackberry/i'         =>  'BlackBerry',
            '/webos/i'              =>  'Mobile'
        );

        foreach ($os_array as $regex => $value) {

            if (preg_match($regex, $u_agent)) {
                $platform    =   $value;
                break;
            }
        }

        // Next get the name of the useragent yes seperately and for good reason
        if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        } elseif (preg_match('/Firefox/i', $u_agent)) {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        } elseif (preg_match('/Chrome/i', $u_agent)) {
            $bname = 'Google Chrome';
            $ub = "Chrome";
        } elseif (preg_match('/Safari/i', $u_agent)) {
            $bname = 'Apple Safari';
            $ub = "Safari";
        } elseif (preg_match('/Opera/i', $u_agent)) {
            $bname = 'Opera';
            $ub = "Opera";
        } elseif (preg_match('/Netscape/i', $u_agent)) {
            $bname = 'Netscape';
            $ub = "Netscape";
        } else {
	    $ub = '';
	}

        //  finally get the correct version number
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';

        if (!preg_match_all($pattern, $u_agent, $matches)) {
            // we have no matching number just continue
        }

        // see how many we have
        $i = count($matches['browser']);
        if ($i != 1) {
            //we will have two since we are not using 'other' argument yet
            //see if version is before or after the name
            if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                $version = $matches['version'][0];
            } else {
                $version = $matches['version'][1];
            }
        } else {
            $version = $matches['version'][0];
        }

        // check if we have a number
        $version = ($version == null || $version == "") ? "?" : $version;

        return array(
            'userAgent' => $u_agent,
            'name'      => $bname,
            'version'   => $version,
            'platform'  => $platform,
            'pattern'   => $pattern
        );
    }

    public function browserUser()
    {
        $browser = $this->userAgent();
        return $browser['name'] . ' v.' . $browser['version'];
    }

    public function osUser()
    {
        $OS = $this->userAgent();
        return $OS['platform'];
    }

    public function index(Request $request)
    {
        $ip      = $this->ipUser();
        $browser = $this->browserUser();
        $os      = $this->osUser();

        // cookie
        unset($_COOKIE['VISITOR']);
        if (!isset($_COOKIE['VISITOR'])) {

            // will record
            // merekam pengunjung yang sama dihari yang sama.
            // Cookie akan disimpan selama 24 jam
            $duration = time() + 60 * 60 * 24;

            // save kedalam cookie browser
            setcookie('VISITOR', $browser, $duration);

            // current time
            // $dateTime = date('Y-m-d H:i:s');

            // Query
            $visitor = Visitor::create(
                [
                    'ip' => $ip,
                    'os' => $os,
                    'browser' => $browser,
                ]
            );

        }

        if(!empty($request->q)) return redirect(url('data/' . $request->q));

        $news_flash = [];
        $get_data = Data::orderBy('created_at', 'desc')->first();
        if ($get_data) {
            $news_flash[] = (object)['title' => $get_data->judul, 'url' => route('page-data-details', $get_data->judul)];
        }
        $get_infographic = InfoGrapik::orderBy('created_at', 'desc')->first();
        if ($get_infographic) {
            $news_flash[] = (object)['title' => $get_infographic->judul, 'url' => route('pages.detail.infograpik', $get_infographic->id)];
        }
        $get_publication = Publikasi::orderBy('created_at', 'desc')->first();
        if ($get_publication) {
            $news_flash[] = (object)['title' => $get_publication->judul, 'url' => route('pages-publikasi')];
        }
        $data['news_flash'] = $news_flash;

        $data['latest_galeries'] = Galery::orderBy('created_at', 'desc')->limit(3)->get();

        // Banner
        $banner = Banner::all();
        return view('index')->with($data)->with('visitor', $visitor)->with('banner', $banner);
    }
}
