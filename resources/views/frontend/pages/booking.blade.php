@extends('frontend.app')

@section('title', 'Ticket booking')

@section('content')
 {{-- Breadcumb --}}
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('/') }}frontend/assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Air Ticket Booking</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Air Ticket Booking</li>
                </ul>
            </div>
        </div>
    </div>

  <div class="container py-3 position-relative overflow-hidden rounded-3" 
     style="background: linear-gradient(135deg, #0d6efd 0%, #198754 100%); 
            min-height: 220px; 
            display: flex; 
            align-items: center;">
    
    <!-- Decorative Background Icons -->
    <i class="bi bi-airplane-fill position-absolute text-white opacity-10" 
       style="font-size: 10rem; top: -30px; right: -20px; transform: rotate(15deg);"></i>
    <i class="bi bi-globe position-absolute text-white opacity-10" 
       style="font-size: 8rem; bottom: -40px; left: -10px; transform: rotate(-20deg);"></i>
    <i class="bi bi-clouds-fill position-absolute text-white opacity-10" 
       style="font-size: 6rem; top: 10px; left: 50%; transform: translateX(-50%);"></i>

    <!-- Content -->
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h5 class="text-white text-center lh-base fw-medium px-2 px-md-4">
                As-Sunnah Travels makes your journey affordable and effortless! We offer cheap air tickets to destinations all over the country and worldwide, ensuring you get the best value for your travels. Whether it’s a domestic trip or an international flight, our user-friendly booking platform and competitive fares simplify your planning. Fly with confidence and savings—book your ticket with As-Sunnah Travels today!
            </h5>
        </div>
    </div>
</div>
 <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="booking-card">
                    <div class="booking-header">
                        <h2 class="mb-0">✈️ Book Your Flight</h2>
                        <p class="mb-0 mt-2">Find the best deals on flights worldwide</p>
                    </div>
                    <div class="booking-body">
                        <form id="bookingForm">
                            <!-- Trip Type -->
                            <div class="trip-type-options">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tripType" id="oneWay" value="oneway" checked>
                                            <label class="form-check-label" for="oneWay">
                                                One Way
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tripType" id="roundTrip" value="roundtrip">
                                            <label class="form-check-label" for="roundTrip">
                                                Round Trip
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tripType" id="multiCity" value="multicity">
                                            <label class="form-check-label" for="multiCity">
                                                Multi-City
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- From and To -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="fromCountry" class="form-label">From</label>
                                    <select class="form-select form-select-lg" id="fromCountry" required>
                                        <option value="">Loading countries...</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="toCountry" class="form-label">To</label>
                                    <select class="form-select form-select-lg" id="toCountry" required>
                                        <option value="">Loading countries...</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Dates -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="departDate" class="form-label">Departure Date</label>
                                    <input type="date" class="form-control form-control-lg" id="departDate" required>
                                </div>
                                <div class="col-md-6" id="returnDateDiv">
                                    <label for="returnDate" class="form-label">Return Date</label>
                                    <input type="date" class="form-control form-control-lg" id="returnDate">
                                </div>
                            </div>

                            <!-- Passengers and Class -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="passengers" class="form-label">Passengers</label>
                                    <select class="form-select form-select-lg" id="passengers" required>
                                        <option value="1">1 Passenger</option>
                                        <option value="2">2 Passengers</option>
                                        <option value="3">3 Passengers</option>
                                        <option value="4">4 Passengers</option>
                                        <option value="5">5 Passengers</option>
                                        <option value="6">6+ Passengers</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="classType" class="form-label">Class</label>
                                    <select class="form-select form-select-lg" id="classType" required>
                                        <option value="economy">Economy</option>
                                        <option value="premium">Premium Economy</option>
                                        <option value="business">Business Class</option>
                                        <option value="first">First Class</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Contact Information -->
                            <h5 class="mt-4 mb-3">Contact Information</h5>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="John Doe" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="john@example.com" required>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="+1 234 567 8900" required>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg btn-book">
                                    Search Flights
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Fetch countries from API
        async function loadCountries() {
            try {
                const response = await fetch('https://restcountries.com/v3.1/all');
                const countries = await response.json();
                
                // Sort countries alphabetically by name
                countries.sort((a, b) => a.name.common.localeCompare(b.name.common));
                
                const fromSelect = document.getElementById('fromCountry');
                const toSelect = document.getElementById('toCountry');
                
                // Clear loading option
                fromSelect.innerHTML = '<option value="">Select Departure Country</option>';
                toSelect.innerHTML = '<option value="">Select Arrival Country</option>';
                
                // Add countries to both select boxes
                countries.forEach(country => {
                    const option1 = document.createElement('option');
                    option1.value = country.cca2;
                    option1.textContent = `${country.flag} ${country.name.common}`;
                    fromSelect.appendChild(option1);
                    
                    const option2 = document.createElement('option');
                    option2.value = country.cca2;
                    option2.textContent = `${country.flag} ${country.name.common}`;
                    toSelect.appendChild(option2);
                });
            } catch (error) {
                console.error('Error loading countries:', error);
                alert('Failed to load countries. Please refresh the page.');
            }
        }

        // Load countries when page loads
        loadCountries();

        // Handle trip type changes
        const tripTypeRadios = document.querySelectorAll('input[name="tripType"]');
        const returnDateDiv = document.getElementById('returnDateDiv');
        const returnDateInput = document.getElementById('returnDate');

        tripTypeRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'oneway') {
                    returnDateDiv.style.display = 'none';
                    returnDateInput.removeAttribute('required');
                } else {
                    returnDateDiv.style.display = 'block';
                    if (this.value === 'roundtrip') {
                        returnDateInput.setAttribute('required', 'required');
                    }
                }
            });
        });

        // Set minimum date to today
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('departDate').setAttribute('min', today);
        document.getElementById('returnDate').setAttribute('min', today);

        // Form submission
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const fromCountry = document.getElementById('fromCountry');
            const toCountry = document.getElementById('toCountry');
            alert(`Flight search submitted!\nFrom: ${fromCountry.options[fromCountry.selectedIndex].text}\nTo: ${toCountry.options[toCountry.selectedIndex].text}`);
        });
    </script>
@endsection