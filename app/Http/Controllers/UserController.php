<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class UserController extends Controller
{
    private $hero;
    private $heroCard1;
    private $heroCard3;
    private $heroCard4;
    private $clients;
    private $services;
    private $service1;
    private $service2;
    private $service3;
    private $partners;
    private $statestics;
    private $contactUs;
    private $overview;
    private $whyChooseUs;
    private $marketingStrategy;
    private $topRankedAgency;
    private $team;

    public function __construct()
    {
        $this->hero = [
            "title" => "Welcome to Newsmaker",
            "heading" => "Top Public Relation Agency in India.",
            "description" => "Empowering brand to reach their potential customers with our top rated services and out of the box idea.",
            "card1Heading" => "Overall Rating",
            "card1Description" => "Check how much our customers like our services and what results we drove for them",
            "card3Heading" => "PR Expert",
            "card3Description" => "Leading PR Agency that served 500+ clients",
            "card4Heading" => "Marketing Expert",
            "card4Description" => "Team of experts with decades of experience",
        ];
        $this->clients = [
            "heading" => "Overall Rating",
            "description" => "Worked with 1000+ companies worldwide",
            "logo1" => asset('asset/images/clients/logo1.jpg'),
            "logo2" => asset('asset/images/clients/logo2.jpg'),
            "logo3" => asset('asset/images/clients/logo3.jpg'),
            "logo4" => asset('asset/images/clients/logo4.jpg'),
            "logo5" => asset('asset/images/clients/logo5.jpg'),
            "logo6" => asset('asset/images/clients/logo6.jpg'),
            "logo7" => asset('asset/images/clients/logo7.jpg'),
            "logo8" => asset('asset/images/clients/logo8.jpg'),
            "logo9" => asset('asset/images/clients/logo9.jpg'),
            "logo10" => asset('asset/images/clients/logo10.jpg'),
            "logo11" => asset('asset/images/clients/logo11.jpg'),
            "logo12" => asset('asset/images/clients/logo12.jpg'),
            "logo13" => asset('asset/images/clients/logo13.jpg'),
            "logo14" => asset('asset/images/clients/logo14.jpg'),
            "logo15" => asset('asset/images/clients/logo15.jpg'),
            "logo16" => asset('asset/images/clients/logo16.jpg'),
            "logo17" => asset('asset/images/clients/logo17.jpg'),
            "logo18" => asset('asset/images/clients/logo18.jpg'),
            "logo19" => asset('asset/images/clients/logo19.jpg'),
            "logo20" => asset('asset/images/clients/logo20.jpg'),
            "logo21" => asset('asset/images/clients/logo21.jpg'),
            "logo22" => asset('asset/images/clients/logo22.jpg'),
            "logo23" => asset('asset/images/clients/logo23.jpg')

        ];
        $this->services = [
            "title" => "Newsmaker Media and Communications",
            "heading" => "Our Services",
            "description" => "Newsmaker Media and Communications is dedicated to providing best service quality",
            "service1Heading" => "Public Relation",
            "service1Description" => "Get featured in India's top media houses",
            "service2Heading" => "Digital Marketing",
            "service2Description" => "Accelerate your business across multpliple digital channels",
            "service3Heading" => "TV Interviews",
            "service3Description" => "Get 1 to 1 interview on Ondia's top TV channels",
        ];
        $this->partners = [
            "heading" => "Our Partners",
            "description" => "Newsmaker Media and Communications is dedicated to providing best service quality"
        ];
        $this->statestics = [
            "title" => "A strategy driven Marketing Agency",
            "heading" => "Higher Sales & Traffic with Our Powerful Marketing",
            "description" => "Beyond Boundaries: Redefining PR for Brand Success",
            "totalClients" => "1000+ Clients",
            "clientsDescription"=> "Served industry wide clients to provide nation wide reach.",
            "totalPartners" => "300+ Partners",
            "partnersDescription"=> "Partnership we've developed with media house to provide better reach.",
            "totalArticles" => "1000+ Artical Published",
            "articlesDescription"=> "Curated and published content to share client's informations.",
            "totalTvCoverages" => "5000+ TV Coverages",
            "tvCoveragesDescription"=> "Featured brand on multiple TV Channels to boost brand reach.",
        ];
        $this->contactUs = [
            "description" => "Please fill out the form with a plan or project that you'd like to work upon. Our team will be get in touch as soon as possible."
        ];
        $this->overview = [
            "title" => "A strategy driven Agency",
            "heading" => "Driving brand success with strategic storytelling and media expertise",
            "description" => "Newsmaker Media and Communications, a leading PR agency, has successfully served 1000+ clients across industries. With 300+ media partners, we secure extensive coverage for brands. Our 1000+ published articles showcase our expertise in strategic storytelling and media relations, cementing our position as a top PR agency for brand visibility and reputation.<br><br>
            At Newsmaker Media and Communications, our data-driven approach tailors PR strategies to unique client needs. Our team of experts crafts engaging narratives, driving brand loyalty. Achieving remarkable ROI, we cultivate relationships with key journalists and influencers, positioning clients as thought leaders and enhancing market presence.",
            "cardCount" => "200M+",
            "cardHeading" => "Reach in Articles",
            "cardDescription" => "We've established our brand as a powerful force in media. Our extensive network ensures wide visibility and unmatched brand recognition.",
        ];
        $this->whyChooseUs = [
            "title" => "Why choose Us",
            "heading" => "Pioneering PR strategies that redefine brand success, unleashing boundless potential",
            "description" => "Unlike any other agency, we boast pioneering AI-powered data analytics, enabling real-time campaign optimizations for unmatched precision. Our exclusive media amplification network guarantees your brand reaches niche audiences worldwide. With bespoke creative content and 24/7 crisis management support, we redefine PR, setting your brand on a trajectory of unrivaled success.",
            "point1" => "300+ Media Partners",
            "point2" => "1000+ Published articles",
            "point3" => "Leveraging Digital PR with Traditional PR",
        ];
        $this->marketingStrategy = [
            "title" => "A strategy driven Marketing Agency",
            "heading" => "Top-Ranked Public Relations and Media Marketing Agency",
            "description" => "Brand who is working on more than 300 media houses and 20+ expert team",
            "reachCount" => "200M+",
            "reachHeading" => "Generated Reach",
            "reachDescription" => "Provided 200 million+ reach to our esteemed customers with our services and the support of our partners",
            "customerCount" => "1000+",
            "customerHeading" => "Total Customers",
            "customerDescription" => "Our esteemed customers who trusted us to boost their marketing efforts",
            "connectionCount" => "300+",
            "connectionHeading" => "Global Connections",
            "connectionDescription" => "We keep partnering with top media houses to provide the best customer satisfaction",
        ];
        $this->topRankedAgency = [
            "cardHeading" => "Result that",
            "cardHeading1" => "Matters",
            "cardDescription" => "We're result focused PR agency that works with dedication",
            "growthCount" => "2M+",
            "growthHeading" => "Organic Growth",
            "engagementCount" => "38%",
            "engagementHeading" => "Engagement Rate",
            "heading" => "Newsmaker Media and Communications, is the result-oriented PR agency that propels your brand to new heights. ",
            "description" => "Our passion lies in delivering tangible outcomes that leave a lasting impact. With a strategic approach, we curate captivating narratives, securing media coverage across diverse platforms. Our data-driven strategies ensure increased brand awareness, a sterling reputation, and impressive ROI.<br><br>
            By fostering relationships with key journalists and influencers, we position your brand as an industry leader. At Newsmaker, success is measured by your success, and we're committed to making headlines that truly matter. Let's collaborate and create a PR journey that drives remarkable results together!"
        ];
        $this->team = [
            "title" => "Our Team",
            "heading" => "The team behind the success of every client's stories, in execution, operation, content curation, till results.",
            "team1Name"=>"Ms. Ekta Paliwal",
            "team1Designation"=> "Founder",
            "team1Image"=> asset('asset/images/team/team1.jpg'),
            "team2Name"=>"Ms. Romita Khurana",
            "team2Designation"=> "Head-Marketing",
            "team2Image"=>asset('asset/images/team/team2.jpg'),
            "team3Name"=>"Ms. Simran Nagpal",
            "team3Designation"=> "Head-Business Development",
            "team3Image"=>asset('asset/images/team/team3.jpg'),
        ];
    }

    public function index(){
        // $this->hero['heading'] = "shanu";
        return view('index',['hero'=>$this->hero,'clients'=>$this->clients,'services'=>$this->services,'partners'=>$this->partners,'statestics'=>$this->statestics,'contactUs'=>$this->contactUs]);
    }

    public function getContactView(){
        return view('contact');
    }
    
    public function getAboutView(){
        // return $this->team;
        return view('about',['marketingStrategy'=>$this->marketingStrategy,'topRankedAgency'=>$this->topRankedAgency,'team'=>$this->team]);
    }

    public function getDigitalMarketingView(){
        $this->hero["heading"] = "Top Digital Marketing Agency in India.";
        $this->overview["heading"] = "Empower Your Brand: Harnessing the Power of Digital Marketing";
        $this->overview["description"] = "Newsmaker Media and Communication, the ultimate destination for transformative digital marketing services. With a remarkable portfolio of 1000+ clients and a robust network of 300+ media partners, we excel in propelling brands to online success. Our data-driven approach and cutting-edge strategies ensure optimized digital campaigns that drive exceptional ROI, making us a leading digital marketing agency.<br><br>
        Newsmaker Media and Communication, we pride ourselves on delivering unmatched digital marketing solutions tailored to your unique needs. Our expert team harnesses the power of innovative tools and techniques to amplify your brand's reach, engagement, and visibility. With a passion for excellence and a commitment to measurable results, we elevate your brand to new digital heights.";
        $this->overview["cardCount"] = "20M+";
        $this->overview["cardHeading"] = "Overall Digital Reach";
        $this->overview["cardDescription"] = "Discover digital marketing mastery that propels brands to unprecedented success. Your brand, our global reach expertise, driving unrivaled growth.";

        $this->whyChooseUs["heading"] = "Accelerating brands with digital-first data-driven strategies to dominate the digital landscape.";
        $this->whyChooseUs["description"] = "Revolutionize Your Success: Embrace AI-fueled, personalized strategies tailored exclusively to your brand included for SEO, PPC, Social Media, and Performance Marketing. With 24/7 dedicated support and unmatched ROI, dominate the digital realm like never before!";
        $this->whyChooseUs["point1"] = "300+ Media Partners";
        $this->whyChooseUs["point2"] = "20M+ Generated Reach";
        $this->whyChooseUs["point3"] = "Leveraging Multi-channel Approach";
        return view('dm',["hero"=>$this->hero,"clients"=>$this->clients,"partners"=>$this->partners,"statestics"=>$this->statestics,"contactUs"=>$this->contactUs,"overview"=>$this->overview,"whyChooseUs"=>$this->whyChooseUs]);
    }

    public function getPRView(){
        $this->hero["heading"] = "Top Public Relations Agency in India.";
        return view('pr',["hero"=>$this->hero,"clients"=>$this->clients,"partners"=>$this->partners,"statestics"=>$this->statestics,"contactUs"=>$this->contactUs,"overview"=>$this->overview,"whyChooseUs"=>$this->whyChooseUs]);
    }

    public function getTvInterviewView(){
        $this->hero["heading"] = "Top Executive Interviews Scheduling Agency in India";
        
        $this->overview["heading"] = "TV Interview Excellence: Your Gateway to Brand Recognition";
        $this->overview["description"] = "Newsmaker Media and Communication is a premier TV interview agency, dedicated to helping brands shine on the screen. With a vast clientele of 1000+ satisfied clients and a strong network of 300+ media partners, we specialize in crafting engaging TV interview experiences. Our expert team ensures your brand's message resonates with audiences, driving impactful visibility and recognition.<br><br>
        At Newsmaker Media and Communication, we take pride in curating compelling TV interviews that elevate your brand's influence. Our comprehensive services include media training, message refinement, and strategic placement, ensuring your brand emerges in the spotlight. Trust our industry expertise to navigate TV opportunities, propelling your brand to the forefront of the media landscape.";
        $this->overview["cardCount"] = "1000+";
        $this->overview["cardHeading"] = "TV Interviews";
        $this->overview["cardDescription"] = "Unlock the art of TV interview mastery, propelling brands to unparalleled success. Your brand, our expertise in global reach, igniting unmatched visibility.";

        $this->whyChooseUs["heading"] = "Pioneering PR strategies that redefine brand success, unleashing boundless potential";
        $this->whyChooseUs["description"] = "Igniting Your Brand's Spotlight: Unleash unparalleled TV interview mastery with our exclusive access to influential networks, captivating storytelling, and strategic media placement. Elevate your brand's influence like never before!";
        $this->whyChooseUs["point1"] = "300+ Media Partners";
        $this->whyChooseUs["point2"] = "20M+ Generated Reach";
        $this->whyChooseUs["point3"] = "Leveraging Multi-channel Approach";
        return view('dm',["hero"=>$this->hero,"clients"=>$this->clients,"partners"=>$this->partners,"statestics"=>$this->statestics,"contactUs"=>$this->contactUs,"overview"=>$this->overview,"whyChooseUs"=>$this->whyChooseUs]);
    }
    
    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'mf-first-name' => 'required|string|max:255',
            'mf-last-name' => 'required|string|max:255',
            'mf-email' => 'required|email|max:255',
            'mf-mobile' => 'required|string|max:255',
            'mf-Company' => 'required|string|max:255',
            'mf-subject' => 'required|string|max:255',
            'mf-comment' => 'required|string',
        ]);

        // Create a new Contact model instance and fill it with form data
        $contact = new Contact();
        $contact->first_name = $request->input('mf-first-name');
        $contact->last_name = $request->input('mf-last-name');
        $contact->email = $request->input('mf-email');
        $contact->mobile = $request->input('mf-mobile'); // Added mobile number
        $contact->Company = $request->input('mf-Company'); // Added Company name
        $contact->subject = $request->input('mf-subject');
        $contact->comments = $request->input('mf-comment');

        // Save the data to the database
        $contact->save();

        // Redirect back to the contact form with a success message
        return redirect()->back()->with('success', 'Your message has been submitted successfully!');
    }
}
