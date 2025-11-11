<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $package->title }} - Hajj Package 2026</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @page { margin: 30px; }
        body {
            font-family: DejaVu Sans, Arial, sans-serif;
            background: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 3px solid #2ecc71;
        }
        .header h1 {
            color: #0d5e3a;
            font-size: 28px;
            margin: 0;
            font-weight: 700;
        }
        .header p {
            color: #27ae60;
            font-size: 16px;
            margin: 8px 0 0;
        }
        .price-box {
            background: linear-gradient(135deg, #2ecc71, #27ae60);
            color: white;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            margin: 25px 0;
            font-size: 32px;
            font-weight: 800;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        }
        .section-title {
            color: #0d5e3a;
            font-size: 20px;
            font-weight: 600;
            margin: 25px 0 15px;
            border-left: 4px solid #2ecc71;
            padding-left: 12px;
        }
        .features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 20px 0;
        }
        .feature-item {
            display: flex;
            align-items: center;
            background: #f8f9fa;
            padding: 12px;
            border-radius: 10px;
            font-size: 15px;
        }
        .feature-icon {
            width: 40px;
            height: 40px;
            background: #2ecc71;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-size: 18px;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #999;
            border-top: 1px solid #eee;
            padding-top: 15px;
        }
        .company-info {
            text-align: center;
            margin-top: 30px;
            color: #0d5e3a;
            font-weight: 600;
        }
        @media (max-width: 600px) {
            .features { grid-template-columns: 1fr; }
            .price-box { font-size: 26px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>{{ $package->title }}</h1>
            <p>Hajj Package 2026 • As-Sunnah Travels</p>
        </div>

        <!-- Price -->
        <div class="price-box">
            BDT {{ number_format($package->price) }}
            <div style="font-size:16px; margin-top:5px; opacity:0.9;">Starts From</div>
        </div>

        <!-- Package Details -->
        <div class="section-title">Package Includes</div>
        <div class="features">
            @foreach($package->features as $feature)
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="{{ $feature['icon'] }}"></i>
                    </div>
                    <div>{{ $feature['text'] }}</div>
                </div>
            @endforeach
        </div>

        <!-- Description -->
        <div class="section-title">Description</div>
        <p style="background:#f0f8f0; padding:15px; border-radius:10px; border-left:4px solid #2ecc71;">
            {{ $package->description }}
        </p>

        <!-- Footer -->
        <div class="footer">
            <p>*Terms & Conditions Applicable</p>
            <div class="company-info">
                As-Sunnah Travels • Hotline: +880 1700-000000 • www.assunnah.com
            </div>
        </div>
    </div>
</body>
</html>