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

    private $testimonials;

    private $homeFaqs;
    private $prFaqs;
    private $dmFaqs;
    private $tvFaqs;


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
            "services" => [
                [
                    "serviceHeading" => "Public Relation",
                    "serviceDescription" => "Get featured in India's top media houses",
                    "serviceImage" => asset('asset/images/pr_services.webp')
                ],
                [
                    "serviceHeading" => "Digital Marketing",
                    "serviceDescription" => "Accelerate your business across multiple digital channels",
                    "serviceImage" => asset('asset/images/digital_marketing_services.webp')
                ],
                [
                    "serviceHeading" => "TV Interviews",
                    "serviceDescription" => "Get 1 to 1 interview on India's top TV channels",
                    "serviceImage" => asset('asset/images/tv_interview_services.webp')
                ],
            ],
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
            "title" => "Newsmaker media and Communication",
            "heading" => "Team",
            "description" => "The team behind the success of every client's stories, in execution, operation, content curation, till results.",
            "team1" => [
                "name" => "Ms. Ekta Paliwal",
                "designation" => "Founder",
                "image" => asset('asset/images/team/team1.jpg'),
            ],
            "team2" => [
                "name" => "Ms. Romita Khurana",
                "designation" => "Head-Marketing",
                "image" => asset('asset/images/team/team2.jpg'),
            ],
            "team3" => [
                "name" => "Ms. Simran Nagpal",
                "designation" => "Head-Business Development",
                "image" => asset('asset/images/team/team4.jpg'),
            ],
        ];        

        $this->testimonials = [
            "testimonials1" => [
                "clientCompanyName" => "STAR IMAGING PATH LABS",
                "clientName" => "DR. SAMEER BHAT!",
                "clientDesignation" => "DIRECTOR",
                "message" => "Newsmaker Media and Communications gets the big picture and I trust them to provide an independent and comprehensive overview and response in any given situation. I rely on NMC to provide the strategic communications counsel that makes a difference to us and our business."
            ],
            "testimonials2" => [
                "clientCompanyName" => "KUNWAR PUBLIC SCHOOL",
                "clientName" => "MR.RAJESH SINGH",
                "clientDesignation" => "MD",
                "message" => "I don't have to worry about PR at all. NMC is our strategic counsel - not a supplier. I think we get more than our share of voice and NMC is responsible for that"
            ],
            "testimonials3" => [
                "clientCompanyName" => "CYBLE",
                "clientName" => "MR. BEENU ARORA",
                "clientDesignation" => "CO-FOUNDER",
                "message" => "Newsmaker Media and Communications PR is a trusted advisor. They have been fundamental in managing profile lifting campaigns as well as internal communications. They have a fantastic understanding of the environment in which we operate."
            ],
            "testimonials4" => [
                "clientCompanyName" => "HENSON GROUP",
                "clientName" => "MR. ABHEEK DUTTA",
                "clientDesignation" => "CO-FOUNDER",
                "message" => "The development of key messages, a communications and events calendar and implementation of a monthly review has been instrumental in our strategic planning and tactical management of new and existing programs. With Newsmaker Media and Communications' guidance I have been able to develop quality internal and external programs and have been able to break down barriers between teams."
            ],
            "testimonials5" => [
                "clientCompanyName" => "BU ABDULLAH GROUP OF COMPANIES",
                "clientName" => "DR.BU ABDULLAH",
                "clientDesignation" => "CHAIRMAN",
                "message" => "After dealing with two other PR firms in as many years we appointed NMC. Newsmaker Media and Communications is a trusted advisor in the inner sanctum of our business. The guidance and direction I receive from NMC is world class. They understand our business and their ability to manage difficult situations effectively and efficiently is second to none."
            ],
            "testimonials6" => [
                "clientCompanyName" => "STAR TV NETWORK",
                "clientName" => "MR.NAVNEET PRABHU",
                "clientDesignation" => "EXECUTIVE PRODUCER",
                "message" => "Newsmaker Media and Communications provides us with an external view that is always backed by professionalism and sound judgement. We see no reason to look elsewhere for external PR assistance."
            ],
            "testimonials7" => [
                "clientCompanyName" => "ADELAIDE AIRPORT LTD.",
                "clientName" => "MARK YOUNG",
                "clientDesignation" => "MANAGING DIRECTOR",
                "message" => "Newsmaker Media and Communications is a trusted advisor in the inner sanctum of our business . The guidance and direction I receive from NMC is world class. They understood our business and their ability to manage difficult situations effectively and effeciently is second to none."
            ],
            "testimonials8" => [
                "clientCompanyName" => "BEERENBERG",
                "clientName" => "ANTHONY PAECH",
                "clientDesignation" => "MANAGING DIRECTOR",
                "message" => "Newsmaker Media and Communications has made a difference to our business by positioning me strongly within the food industry in India. Essentially I am now one of only a few national figureheads for the industry. NMC has also helped Beerenberg gain local and national exposure  particularly with our rebrand and with major food and supermarket issues."
            ],
        ];

        $this->prFaqs = [
            "heading" => "Frequently Asked Question (FAQ)",
            "faqs" => [
                "faq1" => [
                    "question" => "What is PR, and why is it essential for my business?",
                    "answer" => "PR stands for Public Relations, and it is crucial for building and maintaining a positive reputation, increasing brand visibility, and establishing credibility among your target audience and stakeholders."
                ],
                "faq2" => [
                    "question" => "What PR services does Newsmaker Media and Communications offer?",
                    "answer" => "We provide a comprehensive range of PR services, including media relations, press release distribution, crisis management, reputation management, event promotion, and spokesperson training."
                ],
                "faq3" => [
                    "question" => "How can media relations benefit my business?",
                    "answer" => "Media relations can help your business gain media coverage, get featured in news articles, and connect with journalists and influencers, resulting in increased brand exposure and credibility."
                ],
                "faq4" => [
                    "question" => "Can Newsmaker Media and Communications handle crisis situations?",
                    "answer" => "Yes, we have extensive experience in crisis management, providing strategic communication to address issues effectively and protect your brand's reputation during challenging times."
                ],
                "faq5" => [
                    "question" => "Can you provide examples of successful PR campaigns conducted by Newsmaker Media and Communications?",
                    "answer" => "Certainly! We have case studies and client testimonials that demonstrate the success of our PR campaigns across various industries."
                ],
                "faq6" => [
                    "question" => "Can Newsmaker Media and Communications handle PR campaigns for startups and small businesses?",
                    "answer" => "Absolutely! We have experience working with startups and small businesses, tailoring our PR strategies to meet their specific needs and budgets."
                ],
                "faq7" => [
                    "question" => "How does Newsmaker Media and Communications measure the success of a PR campaign?",
                    "answer" => "We use various metrics, such as media coverage, reach, engagement, website traffic, and brand sentiment analysis, to measure the effectiveness of our PR campaigns."
                ],
                "faq8" => [
                    "question" => "What industries does Newsmaker Media and Communications specialize in for PR services?",
                    "answer" => "We cater to a wide range of industries, including technology, healthcare, finance, fashion, entertainment, and many others."
                ],
                "faq9" => [
                    "question" => "Does Newsmaker Media and Communications offer PR services for personal branding?",
                    "answer" => "Yes, we provide personal branding PR services to help individuals establish themselves as thought leaders and experts in their respective fields."
                ],
                "faq10" => [
                    "question" => "Can Newsmaker Media and Communications help with international PR campaigns?",
                    "answer" => "Yes, we have experience in running international PR campaigns, reaching audiences across different regions and markets."
                ]
            ]
        ];

        $this->homeFaqs = [
            "heading" => "Frequently Asked Question (FAQ)",
            "faqs" =>[
                "faq1" => [
                    "question" => "What services does Newsmaker Media and Communications offer?",
                    "answer" => "We offer a wide range of services, including media relations, press release distribution, content creation, crisis management, influencer marketing, event promotion, digital PR, social media marketing, digital marketing, and tv interviews."
                ],
                "faq2" => [
                    "question" => "How experienced is Newsmaker Media and Communications?",
                    "answer" => "We have a solid track record of over 5 years in the PR industry and have successfully handled various campaigns for diverse clients."
                ],
                "faq3" => [
                    "question" => "How many customers has Newsmaker Media and Communications worked with?",
                    "answer" => "We have had the privilege of serving more than 1000 customers across different industries, achieving their PR goals effectively."
                ],
                "faq4" => [
                    "question" => "What sets Newsmaker Media and Communications apart from other PR agencies?",
                    "answer" => "Our unique selling point lies in having over 300 media partnerships with India's top PR agencies, enabling us to access an extensive network of media outlets and platforms for our clients."
                ],
                "faq5" => [
                    "question" => "Can Newsmaker Media and Communications handle my industry's specific PR needs?",
                    "answer" => "Absolutely! We have experience working across various industries, and our team of experts is well-equipped to handle diverse PR challenges."
                ],
                "faq6" => [
                    "question" => "Can Newsmaker Media and Communications help with crisis management?",
                    "answer" => "Yes, we have expertise in crisis management and can assist your brand in effectively navigating through challenging situations."
                ],
                "faq7" => [
                    "question" => "How can PR services benefit my business?",
                    "answer" => "PR services can significantly enhance your brand's visibility, reputation, and credibility, leading to increased brand recognition, customer trust, and potential business growth."
                ],
                "faq8" => [
                    "question" => "Does Newsmaker Media and Communications offer customized PR solutions?",
                    "answer" => "Yes, we understand that each client has unique PR requirements, and we offer tailor-made solutions to meet those specific needs."
                ],
                "faq9" => [
                    "question" => "What is the process for initiating a PR campaign with Newsmaker Media and Communications?",
                    "answer" => "The first step is to contact us, and our team will work closely with you to understand your goals and objectives. From there, we will create a personalized PR strategy and execute the campaign accordingly."
                ],
                "faq10" => [
                    "question" => "Can Newsmaker Media and Communications help with social media PR?",
                    "answer" => "Yes, we offer digital PR services that include social media management, influencer collaborations, and online reputation management."
                ],
                "faq11" => [
                    "question" => "What metrics does Newsmaker Media and Communications use to measure the success of a PR campaign?",
                    "answer" => "We use various metrics, such as media mentions, reach, engagement, website traffic, and overall brand sentiment to assess the effectiveness of a PR campaign."
                ],
                "faq12" => [
                    "question" => "Is Newsmaker Media and Communications familiar with SEO-driven PR strategies?",
                    "answer" => "Yes, we are well-versed in incorporating SEO best practices into PR strategies to improve online visibility and search engine rankings."
                ],
                "faq13" => [
                    "question" => "Can Newsmaker Media and Communications help with event promotion and management?",
                    "answer" => "Yes, we have experience in event promotion and management, leveraging media partnerships to boost event visibility."
                ],
                "faq14" => [
                    "question" => "How do I stay updated on the progress of my PR campaign?",
                    "answer" => "We provide regular updates and detailed reports on the performance of your PR campaign, keeping you informed every step of the way."
                ],
                "faq15" => [
                    "question" => "What industries does Newsmaker Media and Communications have expertise in?",
                    "answer" => "We've served clients from diverse industries, including technology, healthcare, finance, fashion, entertainment, and more."
                ]
            ]
        ];

        $this->dmFaqs = [
            "heading" => "Frequently Asked Question (FAQ)",
            "faqs" => [
                "faq1" => [
                    "question" => "What is digital marketing, and how can it benefit my business?",
                    "answer" => "Digital marketing involves promoting products or services using digital channels like search engines, social media, email, and websites. It can benefit your business by increasing brand visibility, attracting targeted leads, and driving conversions."
                ],
                "faq2" => [
                    "question" => "What digital marketing services does Newsmaker Media and Communications offer?",
                    "answer" => "We offer a wide range of digital marketing services, including SEO, social media marketing, content marketing, email marketing, and influencer marketing."
                ],
                "faq3" => [
                    "question" => "Can Newsmaker Media and Communications help improve my website's search engine rankings?",
                    "answer" => "Yes, we are experienced in implementing effective SEO strategies to improve your website's visibility and ranking on search engines."
                ],
                "faq4" => [
                    "question" => "How can social media marketing benefit my business?",
                    "answer" => "Social media marketing can help you engage with your target audience, build brand loyalty, increase website traffic, and generate leads."
                ],
                "faq5" => [
                    "question" => "What type of content marketing does Newsmaker Media and Communications offer?",
                    "answer" => "Our content marketing services include creating engaging and relevant content such as blog posts, articles, infographics, videos, and press releases to attract and retain your audience."
                ],
                "faq6" => [
                    "question" => "What is influencer marketing, and how can it boost my brand?",
                    "answer" => "Influencer marketing involves partnering with influential individuals in your industry to promote your brand. It can expand your reach, build trust, and drive conversions."
                ],
                "faq7" => [
                    "question" => "What is SEO, and why is it essential for my website?",
                    "answer" => "SEO stands for Search Engine Optimization, and it is vital for your website as it helps improve its visibility on search engines like Google, leading to increased organic traffic and potential customers."
                ],
                "faq8" => [
                    "question" => "How does Newsmaker Media and Communications optimize websites for search engines?",
                    "answer" => "Our SEO experts conduct keyword research, optimize website content, improve site structure, and build high-quality backlinks to enhance your website's search engine rankings."
                ],
                "faq9" => [
                    "question" => "Can Newsmaker Media and Communications help with local SEO?",
                    "answer" => "Yes, we offer local SEO services to help businesses improve their visibility in local searches, especially for customers within their geographical area."
                ],
                "faq10" => [
                    "question" => "How long does it take to see results from SEO efforts?",
                    "answer" => "SEO is a gradual process, and the time to see results may vary based on factors like competition and the age of your website. Generally, you can expect to see noticeable improvements within a few months."
                ],
                "faq11" => [
                    "question" => "Does Newsmaker Media and Communications provide SEO audits for existing websites?",
                    "answer" => "Yes, we conduct comprehensive SEO audits to identify areas for improvement and create a customized strategy to optimize your website."
                ],
                "faq12" => [
                    "question" => "Which social media platforms does Newsmaker Media and Communications work with?",
                    "answer" => "We work with all major social media platforms, including Facebook, Instagram, Twitter, LinkedIn, YouTube, and others, to ensure a strong presence across relevant channels."
                ],
                "faq13" => [
                    "question" => "Can Newsmaker Media and Communications help with social media content creation?",
                    "answer" => "Yes, we offer social media content creation services, including graphics, videos, and copywriting, to engage your audience effectively."
                ],
                "faq14" => [
                    "question" => "How can social media advertising benefit my business?",
                    "answer" => "Social media advertising can reach a highly targeted audience, increase brand awareness, drive traffic to your website, and boost lead generation."
                ],
                "faq15" => [
                    "question" => "What email marketing services does Newsmaker Media and Communications provide?",
                    "answer" => "We offer end-to-end email marketing services, including strategy development, list building, email design, automation, and analytics."
                ],
                "faq16" => [
                    "question" => "How can email marketing help nurture leads and drive conversions?",
                    "answer" => "Email marketing allows you to maintain regular communication with your leads, share valuable content, and guide them through the customer journey, ultimately leading to conversions."
                ],
                "faq17" => [
                    "question" => "What is influencer marketing, and how can Newsmaker Media and Communications identify suitable influencers for my brand?",
                    "answer" => "Influencer marketing involves collaborating with influencers to promote your products or services. Our team researches and identifies influencers who align with your brand values and target audience.
                    "
                ],
                "faq18" => [
                    "question" => "Can influencer marketing work for B2B businesses as well?",
                    "answer" => "Absolutely! Influencer marketing can be effective for B2B businesses by collaborating with industry experts and thought leaders to build credibility and reach a relevant audience."
                ]
            ]
        ];

        $this->tvFaqs = [
            "heading" => "Frequently Asked Question (FAQ)",
            "faqs" => [
                "faq1" => [
                    "question" => "What are TV interview services, and how can they benefit my brand?",
                    "answer" => "TV interview services involve securing interview opportunities for your brand on television channels. They are beneficial for increasing brand visibility, credibility, and reaching a wider audience."
                ],
                "faq2" => [
                    "question" => "Tell me about Newsmaker Media and Communications' experience in TV interview services.",
                    "answer" => "Newsmaker Media and Communications has extensive experience in providing successful TV interview services to numerous clients over the past 5 years."
                ],
                "faq3" => [
                    "question" => "What sets Newsmaker Media and Communications apart in the realm of TV interview services?",
                    "answer" => "Our agency has established more than 300 media partnerships with India's top PR agencies, giving us access to an extensive network of TV channels and opportunities."
                ],
                "faq4" => [
                    "question" => "How can TV interviews contribute to my brand's growth and reputation?",
                    "answer" => "TV interviews offer a unique chance to showcase your brand's expertise, products, or services to a broader audience, thereby boosting brand recognition and reputation."
                ],
                "faq5" => [
                    "question" => "What industries does Newsmaker Media and Communications specialize in for TV interview services?",
                    "answer" => "We cater to a wide range of industries, tailoring our TV interview services to meet the unique needs of each client."
                ],
                "faq6" => [
                    "question" => "How can Newsmaker Media and Communications assist with TV interview services?",
                    "answer" => "Our PR experts will strategize, plan, and coordinate TV interview opportunities on relevant channels, aligning them with your brand's objectives and target audience."
                ],
                "faq7" => [
                    "question" => "What steps does Newsmaker Media and Communications take to secure TV interview opportunities?",
                    "answer" => "Our team conducts thorough research to identify suitable TV channels and programs for your target audience. We then reach out to producers and journalists to secure the interview slots."
                ],
                "faq8" => [
                    "question" => "Can Newsmaker Media and Communications help with interview preparation?",
                    "answer" => "Yes, we provide media training to ensure you or your spokesperson are well-prepared, confident, and ready to deliver a compelling TV interview."
                ],
                "faq9" => [
                    "question" => "Can you secure TV interviews on national television networks?",
                    "answer" => "Yes, we have the expertise and connections to secure interviews on national television networks to maximize your brand's reach."
                ],
                "faq10" => [
                    "question" => "How can I increase the chances of my brand being selected for a TV interview?",
                    "answer" => "Having compelling stories, newsworthy content, and relevant expertise can increase the likelihood of being selected for a TV interview. Our team can help you identify and highlight these aspects."
                ]
            ]
        ];   
    }

    public function index(){
        // $this->hero['heading'] = "shanu";
        return view('index',['hero'=>$this->hero,'clients'=>$this->clients,'services'=>$this->services,'partners'=>$this->partners,'statestics'=>$this->statestics,'contactUs'=>$this->contactUs,'testimonials'=>$this->testimonials,'faqs'=>$this->homeFaqs]);
    }

    public function getContactView(){
        return view('contact',['contactUs'=>$this->contactUs,'partners'=>$this->partners,'testimonials'=>$this->testimonials]);
    }

    public function notfound(){
        return view('404');
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
        return view('dm',["hero"=>$this->hero,"clients"=>$this->clients,"partners"=>$this->partners,"statestics"=>$this->statestics,"contactUs"=>$this->contactUs,"overview"=>$this->overview,"whyChooseUs"=>$this->whyChooseUs,'testimonials'=>$this->testimonials,'faqs'=>$this->dmFaqs]);
    }

    public function getPRView(){
        $this->hero["heading"] = "Top Public Relations Agency in India.";
        return view('pr',["hero"=>$this->hero,"clients"=>$this->clients,"partners"=>$this->partners,"statestics"=>$this->statestics,"contactUs"=>$this->contactUs,"overview"=>$this->overview,"whyChooseUs"=>$this->whyChooseUs,'testimonials'=>$this->testimonials,'faqs'=>$this->prFaqs]);
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
        return view('dm',["hero"=>$this->hero,"clients"=>$this->clients,"partners"=>$this->partners,"statestics"=>$this->statestics,"contactUs"=>$this->contactUs,"overview"=>$this->overview,"whyChooseUs"=>$this->whyChooseUs,'testimonials'=>$this->testimonials,'faqs'=>$this->tvFaqs]);
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
