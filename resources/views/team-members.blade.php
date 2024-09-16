<div class="team">
    @foreach ($teamMembers as $teamMember)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="diamond-card" data-aos="fade-up">
                <div class="diamond-card-inner">
                    <div class="member-img">
                        <img src="{{ asset('uploads/' . $teamMember->image) }}" class="img-fluid"
                            alt="{{ $teamMember->name }}">
                        <!-- Gradient overlay -->
                        <div class="gradient-overlay"></div>
                    </div>
                    <div class="diamond-info text-center">
                        <h4>{{ $teamMember->name }}</h4>
                        <span>{{ $teamMember->position }}</span>
                    </div>
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter" style="color: red"></i></a>
                        <a href="#"><i class="bi bi-facebook" style="color: red"></i></a>
                        <a href="#"><i class="bi bi-instagram" style="color: red"></i></a>
                        <a href="#"><i class="bi bi-linkedin"style="color: red"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <style>
        /* Custom CSS for the diamond shape team members */
        .team {
            padding: 50px 0;
        }

        .diamond-card {
            position: relative;
            width: 200px;
            height: 200px;
            margin: 15px;
            overflow: hidden;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: rotate(45deg);
        }

        .diamond-card-inner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            width: 100%;
            height: 100%;
        }

        .member-img {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .member-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Add gradient overlay to enhance text and icon visibility */
        .gradient-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            /* Adjust the height based on how much gradient you want */
            background: linear-gradient(to top, rgba(255, 255, 255, 1), rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
            pointer-events: none;
            /* Allows clicks to pass through */
            z-index: 1;
            /* Make sure it appears above the image but below the icons/text */
        }

        .diamond-info {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            padding: 10px;
            width: calc(100% - 20px);
            box-sizing: border-box;
            z-index: 2;
        }

        .diamond-info h4 {
            font-size: 16px;
            color: #333;
            margin: 0;
        }

        .diamond-info span {
            font-size: 14px;
            color: #666;
        }

        .social {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            gap: 10px;
            z-index: 2;
            /* Ensure it appears above the gradient */
        }

        .social a {
            color: #333;
            font-size: 20px;
            text-decoration: none;
        }

        .social a:hover {
            color: #007bff;
        }
    </style>
</div>
