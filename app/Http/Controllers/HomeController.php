<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $projects = [
        'technology-and-electronics-store' => [
            'title' => 'Technology & Electronics Store',
            'category' => 'Ecommerce',
            'client' => 'Technology Store',
            'date' => 'January 2025',
            'url' => 'https://ecommerce.infinet.ps/',
            'description' => 'A comprehensive ecommerce platform built with Laravel and Bootstrap. Features include user authentication, product management, shopping cart, payment integration, and admin dashboard.',
            'features' => [
                'User registration and authentication',
                'Product catalog with categories',
                'Shopping cart and checkout',
                'Admin dashboard for management',
                'Responsive design with Bootstrap',
                'Payment gateway integration'
            ],
            'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap', 'JavaScript'],
            'images' => [
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(1).png',
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(2).png',
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(3).PNG',
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(4).PNG',
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(5).PNG',
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(6).PNG',
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(7).PNG',
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(8).PNG',
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(9).PNG',
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(10).PNG',
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(11).PNG',
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(12).PNG',
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(13).PNG',
                'assets/img/portfolio/Technology&ElectronicsStore/ecommerce(14).PNG',
                ]
        ],
        'ecommerce-2' => [
            'title' => 'Clothing Shopping Store',
            'category' => 'Ecommerce',
            'client' => 'Fashion Store',
            'date' => 'February 2025',
            'url' => '#',
            'description' => 'A modern fashion ecommerce website with advanced filtering, size selection, and fashion-focused design. Built with clean code and modern UI/UX principles.',
            'features' => [
                'Advanced product filtering',
                'Size and color selection',
                'Fashion-focused design',
                'Mobile-first responsive layout',
                'Search and sorting functionality',
                'Wishlist and favorites'
            ],
            'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap', 'CSS3'],
            'images' => [
                'assets/img/portfolio/ecommerce(3).png',
                'assets/img/portfolio/ecommerce(1).png',
                'assets/img/portfolio/ecommerce(2).png'
            ]
        ],
        'dashboard-1' => [
            'title' => 'Ecommerce Admin Dashboard',
            'category' => 'Dashboard',
            'client' => 'Ecommerce Platform',
            'date' => 'March 2025',
            'url' => '#',
            'description' => 'A comprehensive admin dashboard for ecommerce management. Features include sales analytics, inventory management, user management, and order processing.',
            'features' => [
                'Sales analytics and reporting',
                'Inventory management',
                'User and order management',
                'Real-time statistics',
                'Responsive admin interface',
                'Data visualization charts'
            ],
            'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap', 'Chart.js'],
            'images' => [
                'assets/img/portfolio/dashboard(1).png',
                'assets/img/portfolio/dashboard(2).png'
            ]
        ],
        'dashboard-2' => [
            'title' => 'Advanced Analytics Dashboard',
            'category' => 'Dashboard',
            'client' => 'Business Platform',
            'date' => 'April 2025',
            'url' => '#',
            'description' => 'An advanced analytics dashboard with comprehensive business intelligence features. Provides insights into business performance, customer behavior, and market trends.',
            'features' => [
                'Business intelligence analytics',
                'Customer behavior tracking',
                'Market trend analysis',
                'Custom report generation',
                'Interactive data visualization',
                'Export and sharing capabilities'
            ],
            'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap', 'D3.js'],
            'images' => [
                'assets/img/portfolio/dashboard(2).png',
                'assets/img/portfolio/dashboard(1).png'
            ]
        ]
    ];

    public function index(){
        return view('index');
    }

    public function PortfolioDetails(){
        return view('portfolio-details');
    }

    public function projectDetails($projectId = null){
        if (!$projectId) {
            $projectId = 'ecommerce-1';
        }
        
        if (!isset($this->projects[$projectId])) {
            $projectId = 'ecommerce-1';
        }
        
        $project = $this->projects[$projectId];
        
        // Apply asset() helper to images
        $project['images'] = array_map(function($image) {
            return asset($image);
        }, $project['images']);
        
        $allProjects = $this->projects;
        
        return view('project-details', compact('project', 'projectId', 'allProjects'));
    }
}