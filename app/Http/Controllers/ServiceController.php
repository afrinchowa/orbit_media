<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function show($service)
    {
        $services = [
            'web-design-development' => [
                'sub' => " Designing involves creating an engaging interface, selecting colors, typography, and imagery that align with a brand's identity.",
                'name' => 'Web Design and Development',
                'details' => "Web Design and Development encompasses the entire process of creating and maintaining a website. From designing an aesthetically pleasing layout to developing the technical backend that makes it functional, web design and development ensure that users have an intuitive and seamless experience.
                
                
               

2.Development focuses on coding the website’s structure, implementing features, and ensuring it’s responsive across different devices.
3.Technologies used: HTML, CSS, JavaScript, PHP, Laravel, React, and more.",



                'image' => asset('img/services/web-design-development.jpg'),
            ],
            'graphics-design' => [
                'name' => 'Graphics Design',
                'details' => 'Graphics Design is about creating visual content to communicate messages. It includes a variety of designs like logos, brochures, banners, advertisements, and other marketing materials.

Creative Process: Designers use tools like Adobe Illustrator, Photoshop, and InDesign to create visually appealing and effective graphics.
Brand Identity: Graphics design helps establish a consistent brand identity by using specific fonts, colors, and design patterns that align with a company’s values.',
                'image' => asset('img/services/graphics-design.jpg'),
            ],
            'seo' => [
                'name' => 'SEO (Search Engine Optimization)',
                'details' => 'SEO (Search Engine Optimization) is the process of optimizing your website so that it ranks higher in search engine results pages (SERPs), thus improving its visibility and driving organic traffic.

On-page SEO: Involves optimizing content, meta tags, headers, images, and internal linking to enhance the relevancy of a page.
Off-page SEO: Focuses on building backlinks and improving the website’s authority through strategies like content marketing, social media, and outreach.
Technical SEO: Involves ensuring that the website is crawlable, fast, and mobile-friendly, which helps improve rankings.',
                'image' => asset('img/services/seo.jpg')
            ],
            'digital-marketing' => [
                'name' => 'Social and Digital Marketing',
                'details' => 'Social and Digital Marketing refers to the use of digital platforms, social media, and online advertising to promote products, services, or brands.

Social Media Marketing: Creating engaging content and interacting with users on platforms like Facebook, Instagram, Twitter, LinkedIn, etc.
Digital Advertising: Running paid ad campaigns on platforms such as Google Ads, Facebook Ads, or LinkedIn Ads to drive targeted traffic.
Content Marketing: Creating valuable content (blogs, videos, podcasts) to attract and engage your audience.',
                'image' => asset('img/services/digital-marketing.jpg')
            ],
            'video-editing' => [
                'name' => 'Video Editing',
                'details' => 'Video Editing is the process of taking raw footage and transforming it into a polished video. It involves cutting, arranging, and enhancing video clips, adding sound effects, music, text, and other elements.

Video Production: This includes everything from shooting the video to editing it to create a story or message.
Post-Production: Involves tasks like color correction, audio balancing, and special effects.
Platforms: Videos are optimized for platforms like YouTube, Instagram, Facebook, or for corporate uses like training videos or presentations.',
                'image' => asset('img/services/video-editing.jpg')
            ],
            'networking-solutions' => [
                'name' => 'Networking Solutions',
                'details' => 'Networking Solutions include the design, implementation, and management of network infrastructure to ensure seamless communication and data exchange within an organization.

Network Setup: Includes the configuration of routers, switches, firewalls, and other hardware to create a secure and reliable network.
Security: Securing the network by implementing firewalls, VPNs, and antivirus solutions to protect sensitive data.
Cloud and Remote Networking: Enabling remote access, VPN solutions, and cloud computing for businesses with dispersed teams.',
                'image' => asset('img/services/networking-solutions.jpg')
            ],
        ];

        if (!array_key_exists($service, $services)) {
            abort(404);
        }

        return view('services.show', [
            'serviceSub' => $services[$service]['sub'],
            'serviceName' => $services[$service]['name'],
            'serviceDetails' => $services[$service]['details'],
            // 'serviceDetails1' => $services[$service]['tech'],
            // 'serviceDetails2' => $services[$service]['details2'],
            'serviceImage' => $services[$service]['image'],
        ]);
    }
}
