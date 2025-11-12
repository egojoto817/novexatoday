<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NovexaToday - Professional Interior Design Solutions</title>
    <meta name="description" content="NovexaToday offers comprehensive interior design services for residential and commercial spaces. Transform your environment with our expert design team and innovative solutions.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .header-container-nx7k {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-mx9p {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-qx4r {
            font-size: 1.8rem;
            font-weight: bold;
            color: #ecf0f1;
        }

        .navigation-menu-bx8t {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-cx5y {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .nav-link-cx5y:hover {
            color: #3498db;
        }

        .hero-section-dx2w {
            background: linear-gradient(rgba(52, 73, 94, 0.8), rgba(44, 62, 80, 0.8)), url('https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }

        .hero-content-ex7m {
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero-title-fx9n {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-gx4k {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-hx8p {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-hx8p:hover {
            background: #c0392b;
        }

        .services-section-ix3r {
            padding: 80px 0;
            background: white;
        }

        .container-jx7s {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title-kx9m {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .services-grid-lx4n {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .service-card-mx8r {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s ease;
            border: 1px solid #e9ecef;
        }

        .service-card-mx8r:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .service-icon-nx5t {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #3498db;
        }

        .about-section-ox7w {
            padding: 80px 0;
            background: linear-gradient(135deg, #ecf0f1, #bdc3c7);
        }

        .about-content-px4m {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-qx9k {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image-rx6p {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }

        .history-section-sx8n {
            padding: 80px 0;
            background: white;
        }

        .timeline-container-tx5r {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-item-ux7m {
            background: #f8f9fa;
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 10px;
            border-left: 4px solid #3498db;
            position: relative;
        }

        .timeline-year-vx4k {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .portfolio-section-wx9p {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .portfolio-grid-xx6t {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .portfolio-item-yx8r {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .portfolio-item-yx8r:hover {
            transform: scale(1.02);
        }

        .portfolio-image-zx5m {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .portfolio-content-ax7n {
            padding: 1.5rem;
        }

        .reviews-section-bx4k {
            padding: 80px 0;
            background: linear-gradient(135deg, #34495e, #2c3e50);
            color: white;
        }

        .reviews-grid-cx9p {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .review-card-dx6t {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .review-stars-ex8r {
            color: #f39c12;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-author-fx5m {
            font-weight: bold;
            margin-top: 1rem;
            color: #ecf0f1;
        }

        .contact-section-gx7n {
            padding: 80px 0;
            background: white;
        }

        .contact-grid-hx4p {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-info-ix9k {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
        }

        .contact-item-jx6t {
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact-icon-kx8r {
            color: #3498db;
            font-size: 1.5rem;
        }

        .phone-link-lx5m {
            color: #2c3e50;
            text-decoration: none;
        }

        .phone-link-lx5m:hover {
            color: #3498db;
        }

        .footer-section-mx7n {
            background: #2c3e50;
            color: white;
            padding: 40px 0 20px;
            text-align: center;
        }

        .footer-content-nx4p {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer-links-ox9k {
            margin: 2rem 0;
        }

        .footer-link-px6t {
            color: #ecf0f1;
            text-decoration: none;
            margin: 0 1rem;
            cursor: pointer;
        }

        .footer-link-px6t:hover {
            color: #3498db;
        }

        .modal-overlay-qx8r {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-rx5m {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-sx7n {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .modal-close-sx7n:hover {
            color: #333;
        }

        .expertise-section-tx4k {
            padding: 80px 0;
            background: linear-gradient(135deg, #e8f5e8, #d4edda);
        }

        .expertise-grid-ux9p {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .expertise-card-vx6t {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .process-section-wx8r {
            padding: 80px 0;
            background: white;
        }

        .process-steps-xx5m {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .process-step-yx7n {
            text-align: center;
            position: relative;
        }

        .step-number-zx4p {
            width: 60px;
            height: 60px;
            background: #3498db;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        @media (max-width: 768px) {
            .hero-title-fx9n {
                font-size: 2.5rem;
            }
            
            .navigation-menu-bx8t {
                display: none;
            }
            
            .about-content-px4m,
            .contact-grid-hx4p {
                grid-template-columns: 1fr;
            }
            
            .nav-wrapper-mx9p {
                padding: 0 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%33%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%37%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%32%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%32%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%32%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <header class="header-container-nx7k">
        <nav class="nav-wrapper-mx9p">
            <div class="logo-brand-qx4r">NovexaToday</div>
            <ul class="navigation-menu-bx8t">
                <li><a href="#home" class="nav-link-cx5y">Home</a></li>
                <li><a href="#services" class="nav-link-cx5y">Services</a></li>
                <li><a href="#about" class="nav-link-cx5y">About</a></li>
                <li><a href="#history" class="nav-link-cx5y">History</a></li>
                <li><a href="#portfolio" class="nav-link-cx5y">Portfolio</a></li>
                <li><a href="#expertise" class="nav-link-cx5y">Expertise</a></li>
                <li><a href="#process" class="nav-link-cx5y">Process</a></li>
                <li><a href="#reviews" class="nav-link-cx5y">Reviews</a></li>
                <li><a href="#contact" class="nav-link-cx5y">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero-section-dx2w">
        <div class="hero-content-ex7m">
            <h1 class="hero-title-fx9n">Transform Your Space</h1>
            <p class="hero-subtitle-gx4k">Professional interior design solutions that bring your vision to life with creativity and expertise</p>
            <a href="#contact" class="cta-button-hx8p">Get Started Today</a>
        </div>
    </section>

    <section id="services" class="services-section-ix3r">
        <div class="container-jx7s">
            <h2 class="section-title-kx9m">Our Services</h2>
            <div class="services-grid-lx4n">
                <div class="service-card-mx8r">
                    <div class="service-icon-nx5t">🏠</div>
                    <h3>Residential Design</h3>
                    <p>Complete home makeovers that reflect your personal style and enhance your daily living experience.</p>
                </div>
                <div class="service-card-mx8r">
                    <div class="service-icon-nx5t">🏢</div>
                    <h3>Commercial Spaces</h3>
                    <p>Professional office and retail environments designed to boost productivity and customer engagement.</p>
                </div>
                <div class="service-card-mx8r">
                    <div class="service-icon-nx5t">🎨</div>
                    <h3>Color Consultation</h3>
                    <p>Expert color schemes that create the perfect atmosphere and mood for any space.</p>
                </div>
                <div class="service-card-mx8r">
                    <div class="service-icon-nx5t">🪑</div>
                    <h3>Furniture Selection</h3>
                    <p>Curated furniture pieces that combine functionality with aesthetic appeal.</p>
                </div>
                <div class="service-card-mx8r">
                    <div class="service-icon-nx5t">💡</div>
                    <h3>Lighting Design</h3>
                    <p>Strategic lighting solutions that enhance ambiance and highlight architectural features.</p>
                </div>
                <div class="service-card-mx8r">
                    <div class="service-icon-nx5t">📐</div>
                    <h3>Space Planning</h3>
                    <p>Optimal layout designs that maximize functionality and flow in any environment.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-ox7w">
        <div class="container-jx7s">
            <h2 class="section-title-kx9m">About NovexaToday</h2>
            <div class="about-content-px4m">
                <div class="about-text-qx9k">
                    <p>NovexaToday has been transforming spaces and exceeding client expectations for over a decade. Our team of experienced designers combines creativity with practical solutions to create environments that are both beautiful and functional.</p>
                    <p>We believe that great design should be accessible to everyone. Our approach focuses on understanding your unique needs, lifestyle, and preferences to create spaces that truly reflect who you are.</p>
                    <p>From initial consultation to final installation, we guide you through every step of the design process, ensuring that your vision becomes reality while staying within your budget and timeline.</p>
                </div>
                <img src="https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg" alt="Interior Design Team" class="about-image-rx6p">
            </div>
        </div>
    </section>

    <section id="history" class="history-section-sx8n">
        <div class="container-jx7s">
            <h2 class="section-title-kx9m">Our Journey</h2>
            <div class="timeline-container-tx5r">
                <div class="timeline-item-ux7m">
                    <div class="timeline-year-vx4k">2012</div>
                    <h3>Company Founded</h3>
                    <p>NovexaToday was established with a vision to make professional interior design accessible to homeowners and businesses alike. Started with a small team of passionate designers.</p>
                </div>
                <div class="timeline-item-ux7m">
                    <div class="timeline-year-vx4k">2015</div>
                    <h3>First Major Commercial Project</h3>
                    <p>Successfully completed our first large-scale commercial project, designing a 50,000 sq ft office complex that won the Regional Design Excellence Award.</p>
                </div>
                <div class="timeline-item-ux7m">
                    <div class="timeline-year-vx4k">2018</div>
                    <h3>Team Expansion</h3>
                    <p>Grew our team to include specialists in sustainable design, smart home integration, and accessibility design to better serve our diverse clientele.</p>
                </div>
                <div class="timeline-item-ux7m">
                    <div class="timeline-year-vx4k">2021</div>
                    <h3>Digital Innovation</h3>
                    <p>Launched our virtual design consultation service and 3D visualization platform, making our services more accessible during challenging times.</p>
                </div>
                <div class="timeline-item-ux7m">
                    <div class="timeline-year-vx4k">2023</div>
                    <h3>Sustainable Focus</h3>
                    <p>Became certified in sustainable design practices and launched our eco-friendly design program, helping clients create beautiful spaces with minimal environmental impact.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio-section-wx9p">
        <div class="container-jx7s">
            <h2 class="section-title-kx9m">Featured Projects</h2>
            <div class="portfolio-grid-xx6t">
                <div class="portfolio-item-yx8r">
                    <img src="https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg" alt="Modern Living Room" class="portfolio-image-zx5m">
                    <div class="portfolio-content-ax7n">
                        <h3>Contemporary Living Space</h3>
                        <p>A complete transformation of a family living room featuring clean lines, natural materials, and smart storage solutions.</p>
                    </div>
                </div>
                <div class="portfolio-item-yx8r">
                    <img src="https://images.pexels.com/photos/1571467/pexels-photo-1571467.jpeg" alt="Office Design" class="portfolio-image-zx5m">
                    <div class="portfolio-content-ax7n">
                        <h3>Corporate Office Redesign</h3>
                        <p>Modern workspace design that promotes collaboration while providing quiet zones for focused work.</p>
                    </div>
                </div>
                <div class="portfolio-item-yx8r">
                    <img src="https://images.pexels.com/photos/1571452/pexels-photo-1571452.jpeg" alt="Kitchen Design" class="portfolio-image-zx5m">
                    <div class="portfolio-content-ax7n">
                        <h3>Gourmet Kitchen</h3>
                        <p>Functional and stylish kitchen design with custom cabinetry and professional-grade appliances.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise" class="expertise-section-tx4k">
        <div class="container-jx7s">
            <h2 class="section-title-kx9m">Areas of Expertise</h2>
            <div class="expertise-grid-ux9p">
                <div class="expertise-card-vx6t">
                    <h3>Sustainable Design</h3>
                    <p>Eco-friendly materials and energy-efficient solutions that reduce environmental impact while maintaining style and comfort.</p>
                </div>
                <div class="expertise-card-vx6t">
                    <h3>Smart Home Integration</h3>
                    <p>Seamless integration of technology into your living spaces for enhanced convenience and modern living.</p>
                </div>
                <div class="expertise-card-vx6t">
                    <h3>Universal Design</h3>
                    <p>Accessible design solutions that accommodate people of all ages and abilities without compromising aesthetics.</p>
                </div>
                <div class="expertise-card-vx6t">
                    <h3>Biophilic Design</h3>
                    <p>Incorporating natural elements to create healthier, more productive environments that connect people with nature.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-wx8r">
        <div class="container-jx7s">
            <h2 class="section-title-kx9m">Our Design Process</h2>
            <div class="process-steps-xx5m">
                <div class="process-step-yx7n">
                    <div class="step-number-zx4p">1</div>
                    <h3>Initial Consultation</h3>
                    <p>We meet to discuss your vision, needs, and budget to understand your unique requirements.</p>
                </div>
                <div class="process-step-yx7n">
                    <div class="step-number-zx4p">2</div>
                    <h3>Concept Development</h3>
                    <p>Our team creates initial design concepts and mood boards based on your preferences.</p>
                </div>
                <div class="process-step-yx7n">
                    <div class="step-number-zx4p">3</div>
                    <h3>Design Refinement</h3>
                    <p>We refine the chosen concept with detailed plans, 3D visualizations, and material selections.</p>
                </div>
                <div class="process-step-yx7n">
                    <div class="step-number-zx4p">4</div>
                    <h3>Implementation</h3>
                    <p>Professional installation and project management ensure your design comes to life perfectly.</p>
                </div>
                <div class="process-step-yx7n">
                    <div class="step-number-zx4p">5</div>
                    <h3>Final Walkthrough</h3>
                    <p>We conduct a final review to ensure every detail meets your expectations and provide care instructions.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-bx4k">
        <div class="container-jx7s">
            <h2 class="section-title-kx9m">Client Reviews</h2>
            <div class="reviews-grid-cx9p">
                <div class="review-card-dx6t">
                    <div class="review-stars-ex8r">★★★★★</div>
                    <p>"NovexaToday transformed our outdated living room into a modern, functional space that perfectly fits our family's lifestyle. The attention to detail was exceptional."</p>
                    <div class="review-author-fx5m">- Sarah Mitchell</div>
                </div>
                <div class="review-card-dx6t">
                    <div class="review-stars-ex8r">★★★★★</div>
                    <p>"Professional, creative, and reliable. They listened to our needs and delivered a design that exceeded our expectations. Highly recommend their services."</p>
                    <div class="review-author-fx5m">- David Chen</div>
                </div>
                <div class="review-card-dx6t">
                    <div class="review-stars-ex8r">★★★★★</div>
                    <p>"The team's expertise in sustainable design helped us create an eco-friendly home that's both beautiful and environmentally responsible."</p>
                    <div class="review-author-fx5m">- Maria Rodriguez</div>
                </div>
                <div class="review-card-dx6t">
                    <div class="review-stars-ex8r">★★★★★</div>
                    <p>"From concept to completion, the process was smooth and stress-free. Our new office space has improved productivity and employee satisfaction."</p>
                    <div class="review-author-fx5m">- James Thompson</div>
                </div>
                <div class="review-card-dx6t">
                    <div class="review-stars-ex8r">★★★★★</div>
                    <p>"Incredible attention to detail and creative solutions. They worked within our budget and timeline while delivering outstanding results."</p>
                    <div class="review-author-fx5m">- Lisa Anderson</div>
                </div>
                <div class="review-card-dx6t">
                    <div class="review-stars-ex8r">★★★★★</div>
                    <p>"The 3D visualizations helped us see exactly how our space would look before any work began. The final result was exactly as promised."</p>
                    <div class="review-author-fx5m">- Robert Wilson</div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section-gx7n">
        <div class="container-jx7s">
            <h2 class="section-title-kx9m">Get In Touch</h2>
            <div class="contact-grid-hx4p">
                <div class="contact-info-ix9k">
                    <h3>Contact Information</h3>
                    <div class="contact-item-jx6t">
                        <span class="contact-icon-kx8r">📍</span>
                        <div>
                            <strong>Address:</strong><br>
                            1247 Design Boulevard<br>
                            Creative District, NY 10018
                        </div>
                    </div>
                    <div class="contact-item-jx6t">
                        <span class="contact-icon-kx8r">📞</span>
                        <div>
                            <strong>Phone:</strong><br>
                            <a href="tel:+15551234567" class="phone-link-lx5m">(555) 123-4567</a>
                        </div>
                    </div>
                    <div class="contact-item-jx6t">
                        <span class="contact-icon-kx8r">✉️</span>
                        <div>
                            <strong>Email:</strong><br>
                            info@novexatoday.com
                        </div>
                    </div>
                    <div class="contact-item-jx6t">
                        <span class="contact-icon-kx8r">🕒</span>
                        <div>
                            <strong>Hours:</strong><br>
                            Mon-Fri: 9:00 AM - 6:00 PM<br>
                            Sat: 10:00 AM - 4:00 PM<br>
                            Sun: By appointment
                        </div>
                    </div>
                </div>
                <div>
                    <h3>Schedule a Consultation</h3>
                    <p>Ready to transform your space? Contact us today to schedule your free initial consultation. We'll discuss your vision, assess your space, and provide you with a customized design proposal.</p>
                    <p>Our team is committed to bringing your interior design dreams to life with professionalism, creativity, and attention to detail that sets us apart.</p>
                    <a href="tel:+15551234567" class="cta-button-hx8p">Call Now</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section-mx7n">
        <div class="footer-content-nx4p">
            <div class="logo-brand-qx4r">NovexaToday</div>
            <p>Professional Interior Design Solutions</p>
            <div class="footer-links-ox9k">
                <a href="#" class="footer-link-px6t" onclick="showPrivacyPolicy()">Privacy Policy</a>
                <a href="#" class="footer-link-px6t" onclick="showTermsOfService()">Terms of Service</a>
            </div>
            <p>© 2024 NovexaToday. All rights reserved.</p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="modal-overlay-qx8r">
        <div class="modal-content-rx5m">
            <span class="modal-close-sx7n" onclick="closeModal('privacyModal')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Information We Collect</h3>
                        <p>We collect information you provide directly to us, such as when you contact us for consultations, request quotes, or communicate with our team. This may include your name, email address, phone number, and project details.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Provide interior design services and consultations</li>
                <li>Communicate with you about your projects</li>
                <li>Send you updates about our services</li>
                <li>Improve our website and services</li>
                <li>Comply with legal obligations</li>
            </ul>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy or as required by law.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            
            <h3>Cookies</h3>
            <p>Our website may use cookies to enhance your browsing experience. You can choose to disable cookies through your browser settings.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at info@novexatoday.com or (555) 123-4567.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="termsModal" class="modal-overlay-qx8r">
        <div class="modal-content-rx5m">
            <span class="modal-close-sx7n" onclick="closeModal('termsModal')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using NovexaToday's services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Services Description</h3>
            <p>NovexaToday provides interior design services including but not limited to:</p>
            <ul>
                <li>Design consultations and planning</li>
                <li>Space planning and layout design</li>
                <li>Color and material selection</li>
                <li>Furniture and accessory recommendations</li>
                <li>Project management and implementation</li>
            </ul>
            
            <h3>Client Responsibilities</h3>
            <p>Clients are responsible for:</p>
            <ul>
                <li>Providing accurate information about their needs and preferences</li>
                <li>Timely payment of agreed-upon fees</li>
                <li>Providing access to the project site as needed</li>
                <li>Making decisions within agreed timeframes</li>
            </ul>
            
            <h3>Payment Terms</h3>
            <p>Payment terms will be specified in individual project agreements. Generally, a deposit is required to begin work, with remaining payments due according to project milestones.</p>
            
            <h3>Intellectual Property</h3>
            <p>All design concepts, plans, and materials created by NovexaToday remain our intellectual property until full payment is received.</p>
            
            <h3>Limitation of Liability</h3>
            <p>NovexaToday's liability is limited to the amount paid for services. We are not responsible for delays or issues caused by third-party contractors or suppliers.</p>
            
            <h3>Modifications</h3>
            <p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting on our website.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at info@novexatoday.com or (555) 123-4567.</p>
        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Modal functions
        function showPrivacyPolicy() {
            document.getElementById('privacyModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function showTermsOfService() {
            document.getElementById('termsModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const privacyModal = document.getElementById('privacyModal');
            const termsModal = document.getElementById('termsModal');
            
            if (event.target === privacyModal) {
                closeModal('privacyModal');
            }
            if (event.target === termsModal) {
                closeModal('termsModal');
            }
        }

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal('privacyModal');
                closeModal('termsModal');
            }
        });

        // Add active class to navigation links based on scroll position
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link-cx5y');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (scrollY >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease-in-out';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Add scroll-triggered animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.service-card-mx8r, .portfolio-item-yx8r, .review-card-dx6t, .expertise-card-vx6t, .process-step-yx7n').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Add hover effects for service cards
        document.querySelectorAll('.service-card-mx8r').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.background = 'linear-gradient(135deg, #f8f9fa, #e9ecef)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.background = '#f8f9fa';
            });
        });

        // Add click tracking for analytics (placeholder)
        document.querySelectorAll('.cta-button-hx8p, .phone-link-lx5m').forEach(element => {
            element.addEventListener('click', function() {
                // Analytics tracking code would go here
                console.log('User interaction tracked:', this.textContent || this.href);
            });
        });

        // Mobile menu toggle (for future mobile menu implementation)
        let mobileMenuOpen = false;
        
        function toggleMobileMenu() {
            const nav = document.querySelector('.navigation-menu-bx8t');
            mobileMenuOpen = !mobileMenuOpen;
            
            if (mobileMenuOpen) {
                nav.style.display = 'flex';
                nav.style.flexDirection = 'column';
                nav.style.position = 'absolute';
                nav.style.top = '100%';
                nav.style.left = '0';
                nav.style.right = '0';
                nav.style.background = '#2c3e50';
                nav.style.padding = '1rem';
                nav.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            } else {
                nav.style.display = 'none';
            }
        }

        // Form validation (if contact form is added later)
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Lazy loading for images
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img').forEach(img => {
            imageObserver.observe(img);
        });

        // Add performance monitoring
        window.addEventListener('load', function() {
            setTimeout(() => {
                if ('performance' in window) {
                    const loadTime = performance.timing.loadEventEnd - performance.timing.navigationStart;
                    console.log('Page load time:', loadTime + 'ms');
                }
            }, 0);
        });

        // Add error handling for images
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('error', function() {
                this.style.display = 'none';
                console.log('Image failed to load:', this.src);
            });
        });

        // Add accessibility improvements
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
                document.body.classList.add('keyboard-navigation');
            }
        });

        document.addEventListener('mousedown', function() {
            document.body.classList.remove('keyboard-navigation');
        });

        // Add CSS for keyboard navigation
        const style = document.createElement('style');
        style.textContent = `
            .keyboard-navigation *:focus {
                outline: 2px solid #3498db !important;
                outline-offset: 2px !important;
            }
        `;
        document.head.appendChild(style);
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>




