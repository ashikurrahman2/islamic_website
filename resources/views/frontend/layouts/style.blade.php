 <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/') }}frontend/assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/') }}frontend/{{ asset('/') }}frontend/assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/') }}frontend/assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/') }}frontend/assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/') }}frontend/assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/') }}frontend/assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/') }}frontend/assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/') }}frontend/assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}frontend/assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/') }}frontend/assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/') }}frontend/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/') }}frontend/assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}frontend/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('/') }}frontend/assets/img/favicons/manifest.json">
        <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigi <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/') }}frontend/assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;display=swap" rel="stylesheet">

      <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/magnific-popup.min.css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/swiper-bundle.min.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/style.css">



    {{-- Pre ragistration page --}}

     <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .main-title {
            color: #0d5e3a;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }
        .gov-fee {
            font-size: 1.25rem;
            font-weight: 500;
            margin-bottom: 2rem;
        }
        .section-title {
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            margin-top: 1.5rem;
        }
        .doc-list {
            list-style: disc;
            padding-left: 1.5rem;
        }
        .doc-list li {
            margin-bottom: 0.5rem;
            line-height: 1.6;
        }
        .note-text {
            font-weight: 700;
            margin-top: 1.5rem;
        }
        .kaaba-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }
        .bottom-notice {
            background-color: #f8f9fa;
            border-top: 2px solid #dee2e6;
            padding: 2rem 0;
            margin-top: 3rem;
        }
        .bottom-notice p {
            margin: 0;
            line-height: 1.8;
            text-align: center;
        }

/* Hajj package design */

 :root {
            --primary-green: #2ecc71;
            --dark-green: #27ae60;
            --light-bg: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        /* Header Section */
        .header-section {
            background: linear-gradient(135deg, #0d5e3a 0%, #2ecc71 100%);
            color: white;
            padding: 60px 0 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: moveBackground 20s linear infinite;
        }

        @keyframes moveBackground {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        .header-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
            animation: fadeInDown 1s ease-out;
        }

        .header-section p {
            font-size: 1.1rem;
            position: relative;
            z-index: 1;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        /* Package Cards */
        .package-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.8s ease-out both;
        }

        .package-card:nth-child(1) { animation-delay: 0.2s; }
        .package-card:nth-child(2) { animation-delay: 0.4s; }
        .package-card:nth-child(3) { animation-delay: 0.6s; }

        .package-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(46, 204, 113, 0.1), transparent);
            transition: left 0.6s;
        }

        .package-card:hover::before {
            left: 100%;
        }

        .package-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 20px 60px rgba(46, 204, 113, 0.3);
        }

        .package-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-green), var(--dark-green));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            animation: rotateIn 0.8s ease-out;
            box-shadow: 0 5px 20px rgba(46, 204, 113, 0.4);
        }

        .package-icon i {
            font-size: 2rem;
            color: white;
        }

        .package-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #0d5e3a;
            margin-bottom: 15px;
            text-align: center;
        }

        .package-description {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
            min-height: 50px;
        }

        .price-section {
            text-align: center;
            margin: 25px 0;
            padding: 20px;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }

        .price-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(46, 204, 113, 0.1) 50%, transparent 70%);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .currency {
            font-size: 0.9rem;
            color: #666;
            display: block;
        }

        .price {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary-green);
            line-height: 1;
            position: relative;
            z-index: 1;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .price-label {
            font-size: 0.9rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
            transition: all 0.3s;
            opacity: 0;
            transform: translateX(-20px);
            animation: slideInRight 0.5s ease-out forwards;
        }

        .feature-item:nth-child(1) { animation-delay: 0.1s; }
        .feature-item:nth-child(2) { animation-delay: 0.2s; }
        .feature-item:nth-child(3) { animation-delay: 0.3s; }
        .feature-item:nth-child(4) { animation-delay: 0.4s; }
        .feature-item:nth-child(5) { animation-delay: 0.5s; }
        .feature-item:nth-child(6) { animation-delay: 0.6s; }
        .feature-item:nth-child(7) { animation-delay: 0.7s; }

        .feature-item:hover {
            background: #f8f9fa;
            padding-left: 10px;
            border-radius: 8px;
        }

        .feature-item:last-child {
            border-bottom: none;
        }

        .feature-icon {
            width: 35px;
            height: 35px;
            background: linear-gradient(135deg, var(--primary-green), var(--dark-green));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .feature-icon i {
            font-size: 1rem;
            color: white;
        }

        .feature-text {
            color: #333;
            font-size: 0.95rem;
            flex: 1;
        }

        .btn-call {
            background: linear-gradient(135deg, var(--primary-green), var(--dark-green));
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s;
            width: 100%;
            margin-bottom: 15px;
            box-shadow: 0 5px 20px rgba(46, 204, 113, 0.4);
        }

        .btn-call:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(46, 204, 113, 0.6);
            background: linear-gradient(135deg, var(--dark-green), var(--primary-green));
        }

        .btn-download {
            background: white;
            color: var(--primary-green);
            border: 2px solid var(--primary-green);
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s;
            width: 100%;
            margin-bottom: 15px;
        }

        .btn-download:hover {
            background: var(--primary-green);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(46, 204, 113, 0.4);
        }

        .terms-text {
            text-align: center;
            font-size: 0.85rem;
            color: #999;
            margin-top: 15px;
            font-style: italic;
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes rotateIn {
            from {
                opacity: 0;
                transform: rotate(-180deg) scale(0);
            }
            to {
                opacity: 1;
                transform: rotate(0) scale(1);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-section h1 {
                font-size: 1.8rem;
            }

            .price {
                font-size: 2.5rem;
            }

            .package-title {
                font-size: 1.5rem;
            }
        }

        /* Floating Animation for Icons */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .package-icon {
            animation: rotateIn 0.8s ease-out, float 3s ease-in-out infinite;
        }

    </style>