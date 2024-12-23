<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Metabank;
use App\Models\Lead;
use App\Models\Mainslider;
use App\Models\Portfolio;
use App\Models\Pricing;
use App\Models\Testimonial;
use App\Models\Career;
use App\Models\Newsletter;
use App\Models\Metatitle;
use App\Models\Metatag;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

use App\Mail\LeadSendMail;
use App\Mail\LeadReceivedMail;
use Illuminate\Support\Facades\URL;
use Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $metabank = Metabank::where('slug', 'Main')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Main')->where('type', 'Meta')->get();
        $mainslider = Mainslider::orderBy('lft', 'asc')->get()->toArray();
        $testimonial = Testimonial::where('home', 1)->orderBy('lft', 'asc')->get();
        $metatitle = Metatitle::where('slug', 'Main')->get();
        $metatag = Metatag::where('slug', 'Main')->get();
        return view('index', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,
            'mainslider' => $mainslider,
            'testimonial' => $testimonial,
            'metatag' => $metatag,
            'metatitle' => $metatitle,
        ]);
    }

    public function leads(Request $request)
    {
        // dd($request);

        $visit = new Lead;
        $field = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'mobile' => 'required|max:15',
            'subject' => 'required|max:255',
            'service' => 'max:255',
            'company' => 'max:255',
            'message' => '',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        $visit->name = $field['name'];
        $visit->email = $field['email'];
        $visit->mobile = $field['mobile'];
        $visit->subject = $field['subject'];
        $visit->service = $field['service'];
        $visit->company = $field['company'];
        $visit->message = $field['message'];
        $visit->save();

        $details = [
            "name" => $field['name'],
            "email" => $field['email'],
            "mobile" => $field['mobile'],
            "service" => $field['service'],
            "company" => $field['company'],
            "subject" => $field['subject'],
            "message" => $field['message'],

        ];
        return Redirect::to('/thank-you');
    }

    public function aboutus()
    {
        $metabank = Metabank::where('slug', 'Aboutus')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Aboutus')->where('type', 'Meta')->get();

        $metatitle = Metatitle::where('slug', 'Aboutus')->get();
        $metatag = Metatag::where('slug', 'Aboutus')->get();
        return view('aboutus', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function portfolio()
    {
        $metabank = Metabank::where('slug', 'Portfolio')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Portfolio')->where('type', 'Meta')->get();

        $metatitle = Metatitle::where('slug', 'Portfolio')->get();
        $metatag = Metatag::where('slug', 'Portfolio')->get();
        // $users = User::where('votes', '>', 100)->paginate(15);

        if (request()->has('a')) {
            $portfolio = Portfolio::where('type', request('a'))->orderBy('lft', 'asc')->paginate(9)->appends('a', request('a'));
        } else {

            $portfolio = Portfolio::where('type', "Web")->orderBy('lft', 'asc')->paginate(9);
        }

        // $portfolio = Portfolio::all();
        // $portfolio_ui = Portfolio::where('type', 'ui/ux')->get();
        // $portfolio_web = Portfolio::where('type', 'Web Application')->get();
        // $portfolio_app = Portfolio::where('type', 'App')->get();


        // dd($portfolio);
        return view('portfolio', [
            'metabank' => $metabank, 'metabank2' => $metabank2,
            'portfolio' => $portfolio,
            'metatag' => $metatag,
            'metatitle' => $metatitle,
            // 'portfolioui' => $portfolio_ui,
            // 'portfolioweb' => $portfolio_web,
            // 'portfolioapp' => $portfolio_app,
        ]);
    }

    public function insights()
    {
        $metabank = Metabank::where('slug', 'Insights')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Insights')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'Insights')->get();
        $metatag = Metatag::where('slug', 'Insights')->get();
        return view('insights', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function contactus()
    {
        $metabank = Metabank::where('slug', 'Contactus')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Contactus')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'Contactus')->get();
        $metatag = Metatag::where('slug', 'Contactus')->get();
        return view('contactus', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function ourprocess()
    {
        $metabank = Metabank::where('slug', 'Ourprocess')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Ourprocess')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'Ourprocess')->get();
        $metatag = Metatag::where('slug', 'Ourprocess')->get();
        return view('ourprocess', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function websites()
    {
        $metabank = Metabank::where('slug', 'WebDevelopment')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Webdevelopment')->where('type', 'Meta')->get();
        $pricingweb = Pricing::where('type', 'Web Development')->get();
        $testimonial = Testimonial::where('web', 1)->orderBy('lft', 'asc')->get();
        $portfolio_prime = Portfolio::where('comments', 'LIKE', '%web%')->orderBy('lft', 'asc')->get();
        $metatitle = Metatitle::where('slug', 'WebDevelopment')->get();
        $metatag = Metatag::where('slug', 'WebDevelopment')->get();

        return view('website', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,
            'pricingweb' => $pricingweb,
            'testimonial' => $testimonial,
            "portfolio_prime" => $portfolio_prime,
            'metatag' => $metatag,
            'metatitle' => $metatitle,

        ]);
    }

    public function clients()
    {
        $metabank = Metabank::where('slug', 'Clients')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Clients')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'Clients')->get();
        $metatag = Metatag::where('slug', 'Clients')->get();
        $clients = Client::orderBy('lft', 'asc')->get()->toArray();

        return view('clients', ['metabank' => $metabank, 'metabank2' => $metabank2, 'clients' => $clients, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function testimonial()
    {
        $metabank = Metabank::where('slug', 'Testimonial')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Testimonial')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'Testimonial')->get();
        $metatag = Metatag::where('slug', 'Testimonial')->get();
        $testimonial = Testimonial::orderBy('lft', 'asc')->get()->toArray();

        return view('testimonial', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,
            'testimonial' => $testimonial,
            'metatag' => $metatag,
            'metatitle' => $metatitle,
        ]);
    }

    public function career()
    {
        $metabank = Metabank::where('slug', 'Career')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Career')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'Career')->get();
        $metatag = Metatag::where('slug', 'Career')->get();

        return view('career', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function packages()
    {
        $metabank = Metabank::where('slug', 'Packages')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Packages')->where('type', 'Meta')->get();
        $pricingdesign = Pricing::where('type', 'Design')->get();
        $pricingweb = Pricing::where('type', 'Web Development')->get();
        $pricingsocial = Pricing::where('type', 'Social Media')->get();
        $pricingseo = Pricing::where('type', 'SEO')->get();
        $pricingemail = Pricing::where('type', 'Email Marketing')->get();
        $pricingpaid = Pricing::where('type', 'Paid Marketing')->get();
        $pricingecommerce = Pricing::where('type', 'E-Commerce Management')->get();
        $metatitle = Metatitle::where('slug', 'Packages')->get();
        $metatag = Metatag::where('slug', 'Packages')->get();
        // added more tabs
        $pricinglogo = Pricing::where('type', 'Logo Design')->get();
        $pricinganimation = Pricing::where('type', 'Animation')->get();
        $pricinggame = Pricing::where('type', 'Game Development')->get();
        $pricingeweb = Pricing::where('type', 'E-Commerce Web')->get();

        return view('packages', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,
            'pricingdesign' => $pricingdesign,
            'pricingweb' => $pricingweb,
            'pricingsocial' => $pricingsocial,
            'pricingseo' => $pricingseo,
            'pricingemail' => $pricingemail,
            'pricingpaid' => $pricingpaid,
            'pricingecommerce' => $pricingecommerce,
            'pricinglogo' => $pricinglogo,
            'pricinganimation' => $pricinganimation,
            'pricinggame' => $pricinggame,
            'pricingeweb' => $pricingeweb,
            'metatag' => $metatag,
            'metatitle' => $metatitle,

        ]);
    }

    public function graphicdesign()
    {
        $metabank = Metabank::where('slug', 'Designing')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Designing')->where('type', 'Meta')->get();
        $pricingdesign = Pricing::where('type', 'Design')->get();
        $testimonial = Testimonial::where('design', 1)->orderBy('lft', 'asc')->get();
        $portfolio_prime = Portfolio::where('comments', 'LIKE', '%design%')->orderBy('lft', 'asc')->get();
        $metatitle = Metatitle::where('slug', 'Designing')->get();
        $metatag = Metatag::where('slug', 'Designing')->get();

        // dd($portfolio_prime);
        return view(
            'graphic-design',
            [
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                "pricingdesign" => $pricingdesign,
                'testimonial' => $testimonial,
                "portfolio_prime" => $portfolio_prime,
                'metatag' => $metatag,
                'metatitle' => $metatitle,
            ]
        );
    }

    public function socialmedia()
    {
        $metabank = Metabank::where('slug', 'SocialMedia')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'SocialMedia')->where('type', 'Meta')->get();
        $pricingsocial = Pricing::where('type', 'Social Media')->get();
        $testimonial = Testimonial::where('social_media', 1)->get();
        $portfolio_prime = Portfolio::where('comments', 'LIKE', '%social%')->orderBy('lft', 'asc')->get();
        $metatitle = Metatitle::where('slug', 'SocialMedia')->get();
        $metatag = Metatag::where('slug', 'SocialMedia')->get();

        return view('social-media', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,
            'pricingsocial' => $pricingsocial,
            'testimonial' => $testimonial,
            "portfolio_prime" => $portfolio_prime,
            'metatag' => $metatag,
            'metatitle' => $metatitle,
        ]);
    }

    public function seo()
    {
        $metabank = Metabank::where('slug', 'Seo')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Seo')->where('type', 'Meta')->get();
        $pricingseo = Pricing::where('type', 'SEO')->get();
        $testimonial = Testimonial::where('seo', 1)->orderBy('lft', 'asc')->get();
        $portfolio_prime = Portfolio::where('comments', 'LIKE', '%seo%')->orderBy('lft', 'asc')->get();
        $metatitle = Metatitle::where('slug', 'Seo')->get();
        $metatag = Metatag::where('slug', 'Seo')->get();

        return view('seo', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,
            'pricingseo' => $pricingseo,
            'testimonial' => $testimonial,
            "portfolio_prime" => $portfolio_prime,
            'metatag' => $metatag,
            'metatitle' => $metatitle,

        ]);
    }

    public function emailmarketing()
    {
        $metabank = Metabank::where('slug', 'EmailMarketing')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'EmailMarketing')->where('type', 'Meta')->get();
        $pricingemail = Pricing::where('type', 'Email Marketing')->get();
        $testimonial = Testimonial::where('email_marketing', 1)->orderBy('lft', 'asc')->get();
        $portfolio_prime = Portfolio::where('comments', 'LIKE', '%email%')->orderBy('lft', 'asc')->get();
        $metatitle = Metatitle::where('slug', 'EmailMarketing')->get();
        $metatag = Metatag::where('slug', 'EmailMarketing')->get();

        return view('email-marketing', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,
            'pricingemail' => $pricingemail,
            'testimonial' => $testimonial,
            "portfolio_prime" => $portfolio_prime,
            'metatag' => $metatag, 'metatitle' => $metatitle,
        ]);
    }

    public function ecommerce()
    {
        $metabank = Metabank::where('slug', 'Ecommerce')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Ecommerce')->where('type', 'Meta')->get();
        $pricingecommerce = Pricing::where('type', 'E-Commerce Management')->get();
        $testimonial = Testimonial::where('ecommerce', 1)->orderBy('lft', 'asc')->get();
        $portfolio_prime = Portfolio::where('comments', 'LIKE', '%ecommerce%')->orderBy('lft', 'asc')->get();
        $metatitle = Metatitle::where('slug', 'Ecommerce')->get();
        $metatag = Metatag::where('slug', 'Ecommerce')->get();

        return view('ecommerce', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,
            'pricingecommerce' => $pricingecommerce,
            'testimonial' => $testimonial,
            "portfolio_prime" => $portfolio_prime,
            'metatag' => $metatag, 'metatitle' => $metatitle,
        ]);
    }

    public function paidmarketing()
    {
        $metabank = Metabank::where('slug', 'PaidMarketing')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'PaidMarketing')->where('type', 'Meta')->get();
        $pricingpaid = Pricing::where('type', 'Paid Marketing')->get();
        $testimonial = Testimonial::where('paid_marketing', 1)->orderBy('lft', 'asc')->get();
        $portfolio_prime = Portfolio::where('comments', 'LIKE', '%paid%')->orderBy('lft', 'asc')->get();
        $metatitle = Metatitle::where('slug', 'PaidMarketing')->get();
        $metatag = Metatag::where('slug', 'PaidMarketing')->get();

        return view('paid-marketing', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,
            'pricingpaid' => $pricingpaid,
            'testimonial' => $testimonial,
            "portfolio_prime" => $portfolio_prime,
            'metatag' => $metatag, 'metatitle' => $metatitle,
        ]);
    }

    public function flicksoccer()
    {
        $metabank = Metabank::where('slug', 'FlickSoccer')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'FlickSoccer')->where('type', 'Meta')->get();
        $testimonial = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $metatitle = Metatitle::where('slug', 'FlickSoccer')->get();
        $metatag = Metatag::where('slug', 'FlickSoccer')->get();

        return view('flicksoccer', ['metabank' => $metabank, 'metabank2' => $metabank2, 'testimonial' => $testimonial, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function realstate()
    {
        $metabank = Metabank::where('slug', 'RealState')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'RealState')->where('type', 'Meta')->get();
        $testimonial = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $metatitle = Metatitle::where('slug', 'RealState')->get();
        $metatag = Metatag::where('slug', 'RealState')->get();

        return view('realstate', ['metabank' => $metabank, 'metabank2' => $metabank2, 'testimonial' => $testimonial, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }
    
    public function homestore()
    {
        $metabank = Metabank::where('slug', 'HomeStore')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'HomeStore')->where('type', 'Meta')->get();
        $testimonial = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $metatitle = Metatitle::where('slug', 'HomeStore')->get();
        $metatag = Metatag::where('slug', 'HomeStore')->get();

        return view('homestore', ['metabank' => $metabank, 'metabank2' => $metabank2, 'testimonial' => $testimonial, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function rideshare()
    {
        $metabank = Metabank::where('slug', 'RideShare')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'RideShare')->where('type', 'Meta')->get();
        $testimonial = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $metatitle = Metatitle::where('slug', 'RideShare')->get();
        $metatag = Metatag::where('slug', 'RideShare')->get();

        return view('rideshare', ['metabank' => $metabank, 'metabank2' => $metabank2, 'testimonial' => $testimonial, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function commonppc()
    {
        $metabank = Metabank::where('slug', 'CommonPPC')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'CommonPPC')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'CommonPPC')->get();
        $metatag = Metatag::where('slug', 'CommonPPC')->get();

        return view('common-ppc-goal', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function smartppc()
    {
        $metabank = Metabank::where('slug', 'SmartPPC')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'SmartPPC')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'SmartPPC')->get();
        $metatag = Metatag::where('slug', 'SmartPPC')->get();

        return view('smart-ppc', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function typeofppc()
    {
        $metabank = Metabank::where('slug', 'TypePPC')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'TypePPC')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'TypePPC')->get();
        $metatag = Metatag::where('slug', 'TypePPC')->get();

        return view('types-of-ppc', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function onlinefoundation()
    {
        $metabank = Metabank::where('slug', 'OnlineFoundation')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'OnlineFoundation')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'OnlineFoundation')->get();
        $metatag = Metatag::where('slug', 'OnlineFoundation')->get();

        return view('strong-online-foundation', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function localseo()
    {
        $metabank = Metabank::where('slug', 'LocalSeo')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'LocalSeo')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'LocalSeo')->get();
        $metatag = Metatag::where('slug', 'LocalSeo')->get();

        return view('local-seo', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function outranking()
    {
        $metabank = Metabank::where('slug', 'OutRanking')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'OutRanking')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'OutRanking')->get();
        $metatag = Metatag::where('slug', 'OutRanking')->get();

        return view('outranking', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function optimizebusiness()
    {
        $metabank = Metabank::where('slug', 'OptimizeBusiness')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'OptimizeBusiness')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'OptimizeBusiness')->get();
        $metatag = Metatag::where('slug', 'OptimizeBusiness')->get();

        return view('optimize-business', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function jqueryhistory()
    {
        $metabank = Metabank::where('slug', 'JqueryHistory')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'JqueryHistory')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'JqueryHistory')->get();
        $metatag = Metatag::where('slug', 'JqueryHistory')->get();

        return view('history-of-jquery', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function expireheaders()
    {
        $metabank = Metabank::where('slug', 'ExpireHeaders')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'ExpireHeaders')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'ExpireHeaders')->get();
        $metatag = Metatag::where('slug', 'ExpireHeaders')->get();

        return view('add-expire-headers', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function privacypolicy()
    {
        $metabank = Metabank::where('slug', 'PrivacyPolicy')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'PrivacyPolicy')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'PrivacyPolicy')->get();
        $metatag = Metatag::where('slug', 'PrivacyPolicy')->get();

        return view('privacy-policy', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function termsandconditions()
    {
        $metabank = Metabank::where('slug', 'TermsAndConditions')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'TermsAndConditions')->where('type', 'Meta')->get();
        $metatitle = Metatitle::where('slug', 'TermsAndConditions')->get();
        $metatag = Metatag::where('slug', 'TermsAndConditions')->get();

        return view('termsandconditions', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function applicant(Request $request)
    {

        // $request->validate([
        //     'id'=> '',
        //     'name' => 'required|max:255',
        //     'email' => 'required|max:255',
        //     'phone' => 'required|max:255',
        //     'jobrole' => 'required|max:255',
        //     'file' =>  '',
        //     'position' => 'required|max:255',
        //     'created_at' => '',
        //     'updated_at' => '',
        //     'submit' => ''


        // ]);

        ////////////////////////
        if ($request->file('filename')) {
            $filePath = $request->file('filename');
            $imageName = $filePath->getClientOriginalName();
            $fileName = md5(time()) . '.' . $request->file('filename')->extension();
            $fileName2 = URL::to('/') . '/uploads/uploads/' . $fileName;
            $path = $request->file('filename')->storeAs('uploads', $fileName, 'uploads');
        } else {
            $fileName2 = "";
        }


        // dd($request);


        $applicant = Career::create([

            'name' => $request->name,
            'email' =>  $request->email,
            'phone' => $request->phone,
            'jobrole' => $request->job,
            'file' => $fileName2,
            'position' => $request->position,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return Redirect::to('/thank-you');
        //  $filePath . "<br>".
        // $fileName . "<br>".
        // $imageName . "<br>".

        // $fileName . "<br>";
        // storage_path()."<br>".
        // public_path()."<br>".
        // storage_path('app')."<br>".
        // base_path()."<br>";

        //  $path."<br>".

        // $request->name."<br>"
        // .$request->email."<br>"
        // .$request->phone."<br>"
        // .$request->job."<br>"
        // .$request->position."<br>"
        // .$request->created_at."<br>"
        // .$request->updated_at."<br>";
    }
    public function newsletters(Request $request)
    {


        $applicant = Newsletter::create([

            'name' => $request->name,
            'email' =>  $request->email,
            'purpose' => $request->purpose,
            'website' => $request->website,

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        // $request->name;
        // $request->email;
        // $request->purpose;
        // $request->website;
        return Redirect::to('/thank-you');
        // return   $request->name . "<br>"
        //     . $request->email . "<br>"
        //     . $request->purpose . "<br>"
        //     . $request->website . "<br>";
    }

    public function thankyou()
    {
        $metatitle = Metatitle::where('slug', 'ThankYou')->get();
        $metatag = Metatag::where('slug', 'ThankYou')->get();
        return view('thank-you',
    [
        'metatag' => $metatag, 'metatitle' => $metatitle,   
    ]);
    }

    public function blackfriday()
    {
       return view('black-friday'); 
    }

    public function gym()
    {
        $metabank = Metabank::where('slug', 'Gym')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Gym')->where('type', 'Meta')->get();
        $testimonial = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $metatitle = Metatitle::where('slug', 'Gym')->get();
        $metatag = Metatag::where('slug', 'Gym')->get();

        return view('gym', ['metabank' => $metabank, 'metabank2' => $metabank2, 'testimonial' => $testimonial, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function loyalty()
    {
        $metabank = Metabank::where('slug', 'Loyalty')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Loyalty')->where('type', 'Meta')->get();
        $testimonial = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $metatitle = Metatitle::where('slug', 'Loyalty')->get();
        $metatag = Metatag::where('slug', 'Loyalty')->get();

        return view('loyalty', ['metabank' => $metabank, 'metabank2' => $metabank2, 'testimonial' => $testimonial, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function realestate()
    {
        $metabank = Metabank::where('slug', 'RealEstate')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'RealEstate')->where('type', 'Meta')->get();
        $testimonial = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $metatitle = Metatitle::where('slug', 'RealEstate')->get();
        $metatag = Metatag::where('slug', 'RealEstate')->get();

        return view('realestate', ['metabank' => $metabank, 'metabank2' => $metabank2, 'testimonial' => $testimonial, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }

    public function travelagency()
    {
        $metabank = Metabank::where('slug', 'TravelAgency')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'TravelAgency')->where('type', 'Meta')->get();
        $testimonial = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $metatitle = Metatitle::where('slug', 'TravelAgency')->get();
        $metatag = Metatag::where('slug', 'TravelAgency')->get();

        return view('travelagency', ['metabank' => $metabank, 'metabank2' => $metabank2, 'testimonial' => $testimonial, 'metatag' => $metatag, 'metatitle' => $metatitle,]);
    }
}
