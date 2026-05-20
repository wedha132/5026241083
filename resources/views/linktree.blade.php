<!DOCTYPE html>
<html lang="id">

<head>
    <title>hmsi_its | Instagram, Facebook, TikTok | Linktree</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://assets.production.linktr.ee/profiles/_next/static/logo-assets/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showme() {
            // alert("Halo Selamat Siang");
            Swal.fire({
                title:"Hallo!",
                text:"Selamat Siang",
                icon:"success",
            });
        }

        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
            // document.getElementById("intro").innerHTML = "Sistem Informasi ITS";
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "blue";
            element.style.background = "yellow";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background-color: #363c3e;
            font-family: 'Inter', sans-serif;
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
        }

        .main-card {
            background-color: #2a3235;
            width: 100%;
            max-width: 36rem;
            margin-top: 3rem;
            border-radius: 2rem 2rem 0 0;
            padding: 1.5rem;
            position: relative;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
        }

        .top-icon {
            position: absolute;
            top: 1.5rem;
            width: 2.5rem;
            height: 2.5rem;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            transition: 0.3s;
        }

        .top-icon:hover {
            background-color: #fff;
            text-decoration: none;
            color: #000;
        }

        .profile-section {
            text-align: center;
            margin-top: 3.5rem;
            color: #ffffff;
        }

        .profile-pic {
            width: 6rem;
            height: 6rem;
            border-radius: 50%;
            margin-bottom: 1rem;
            object-fit: cover;
        }

        .social-icons-row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .social-icon-btn {
            color: #ffffff;
            font-size: 1.5rem;
            padding: 0.5rem;
            transition: 0.2s;
        }

        .social-icon-btn:hover {
            color: #cccccc;
            text-decoration: none;
        }

        .links-wrapper {
            width: 100%;
        }

        .btn-linktree {
            background-color: #ffffff;
            color: #2a3235 !important;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            margin-bottom: 0.8rem;
            border-radius: 0.5rem;
            text-decoration: none !important;
            position: relative;
            transition: 0.2s;
            font-weight: 500;
        }

        .btn-linktree:hover {
            background-color: #f0f0f0;
            transform: scale(1.01);
        }

        .link-logo {
            position: absolute;
            left: 0.5rem;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 0.25rem;
            object-fit: cover;
        }

        .footer-section {
            margin-top: auto;
            padding: 2rem 0;
            text-align: center;
        }

        .join-pill {
            background: #ffffff;
            color: #000000;
            padding: 0.8rem 2rem;
            border-radius: 2rem;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 1rem;
            text-decoration: none !important;
        }

        .join-pill:hover {
            background-color: #f0f0f0;
            text-decoration: none;
            color: #000000;
        }
    </style>
</head>

<body>

    <div class="main-card">
        <a href="https://wedha132.github.io/linktree.html" class="top-icon" style="left: 1.5rem;">
            <svg fill="none" height="18" width="18" viewBox="0 0 28 28">
                <path
                    d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z"
                    fill="currentColor"></path>
            </svg>
        </a>

        <a href="#" class="top-icon" style="right: 5.5rem;">
            <svg viewBox="0 0 256 256" width="16" height="16" fill="currentColor">
                <path
                    d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z">
                </path>
            </svg>
        </a>

        <a href="#" class="top-icon" style="right: 1.5rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                <path
                    d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z">
                </path>
            </svg>
        </a>

        <div class="profile-section">
            <img src="https://assets.production.linktr.ee/static/avatars/blank-avatar.svg?io=true&size=avatar-v3_0"
                class="profile-pic border">
            <h1 id="intro" class="font-weight-bold">@hmsi_its</h1>


        </div>

        <div class="links-wrapper">
            <div class="social-icons-row mt-3">
                <a href="https://www.linkedin.com/company/hmsi-its/" target="_blank" class="social-icon-btn"><i
                        class="fab fa-linkedin"></i></a>
                <a href="https://instagram.com/hmsi_its" target="_blank" class="social-icon-btn"><i
                        class="fab fa-instagram"></i></a>
                <a href="https://tiktok.com/@hmsi_its" target="_blank" class="social-icon-btn"><i
                        class="fab fa-tiktok"></i></a>
                <a href="https://www.youtube.com/channel/UCbqLEEMcWOyoYdxyKkKi24w" target="_blank"
                    class="social-icon-btn"><i class="fab fa-youtube"></i></a>
                <a href="https://open.spotify.com/show/55TkLkZZCZLwuawJ0WDd19?si=jwv-Y00xSWeUl56qWjwCzg\u0026dl_branch=1"
                    target="_blank" class="social-icon-btn"><i class="fab fa-spotify"></i></a>
                <a href="https://x.com/HMSI_ITS" target="_blank" class="social-icon-btn px-1"><svg
                        xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path
                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                    </svg></a>
                <a href="mailto:hima@is.its.ac.id" class="social-icon-btn"><i class="fas fa-envelope"></i></a>
                <a href="https://www.facebook.com/hmsi.its" target="_blank" class="social-icon-btn"><i
                        class="fab fa-facebook"></i></a>
                <a href="https://api.whatsapp.com/send?phone=6289526634395" target="_blank" class="social-icon-btn"><i
                        class="fab fa-whatsapp"></i></a>
            </div>

            <a id="tombol" href="https://docs.google.com/document/d/128g1Emm4ryryc7zL3BYxdKbiq_ARwsUS/edit" target="_blank"
                class="btn-linktree">
                <span>Notulensi Sosialisasi MSIB Batch 7</span>
                <i class="fas fa-ellipsis-v position-absolute" style="right: 1.5rem; opacity: 0.5;"></i>
            </a>

            <button class="btn btn-primary" onclick="showme()">Show Me</button>

            <button class="btn btn-primary" onclick="changeText()">Change Text</button>

            <button class="btn btn-primary" onclick="changeStyle()">Change Style</button>

            <a href="https://www.whatsapp.com/channel/0029VadLh6fCXC3BPGrQT645" target="_blank" class="btn-linktree">
                <img src="https://ugc.production.linktr.ee/6d0b76de-f264-4008-b38d-0f5cdfb247dc_An8NY-Bka6uwHXZ57c4Gd25LErYtViOqr0VFNo-1xwoWVPZH2yS2XPKQ46MQcGEc0X6OKzP6Cs4cm-Jx0kKeSjJDof9b2P7LLKt9.jpeg?io=true&size=thumbnail-stack_v1_0"
                    class="link-logo">
                <span>HMSI ITS | WhatsApp Channel</span>
                <i class="fas fa-ellipsis-v position-absolute" style="right: 1.5rem; opacity: 0.5;"></i>
            </a>

            <a href="https://linktr.ee/swfinform" target="_blank" class="btn-linktree">
                <img src="https://ugc.production.linktr.ee/8040aa51-7bbc-4e4c-a3db-5c5cb19e7a65_b76deb46-c9c3-47d6-bc94-d3bcfca1991b-SWFInform.jpeg?io=true&size=thumbnail-stack_v1_0"
                    class="link-logo">
                <span>SWF Inform</span>
                <i class="fas fa-ellipsis-v position-absolute" style="right: 1.5rem; opacity: 0.5;"></i>
            </a>

            <a href="https://open.spotify.com/show/55TkLkZZCZLwuawJ0WDd19?si=My8aFpYITWadrtQgKoxmEQ&nd=1&dlsi=54f540ed22a64464"
                target="_blank" class="btn-linktree">
                <span>Podcast HMSI</span>
                <i class="fas fa-ellipsis-v position-absolute" style="right: 1.5rem; opacity: 0.5;"></i>
            </a>

            <a href="https://www.youtube.com/channel/UCbqLEEMcWOyoYdxyKkKi24w" target="_blank" class="btn-linktree">
                <span>Layar HMSI</span>
                <i class="fas fa-ellipsis-v position-absolute" style="right: 1.5rem; opacity: 0.5;"></i>
            </a>

            <a href="https://fliphtml5.com/bookcase/kbfyt/" target="_blank" class="btn-linktree">
                <img src="https://ugc.production.linktr.ee/4a8aeb72-61c2-4c55-94bb-e68ff1707345_shot.jpeg?io=true&size=thumbnail-stack_v1_0"
                    class="link-logo">
                <span>Majalah Online HMSI</span>
                <i class="fas fa-ellipsis-v position-absolute" style="right: 1.5rem; opacity: 0.5;"></i>
            </a>
        </div>

        <div class="footer-section">
            <a href="#" class="join-pill shadow-sm">Join hmsi_its on Linktree</a>
            <div class="text-white-50" style="font-size: 0.6rem;">
                <a href="#" class="text-reset">Cookie Preferences</a> •
                <a href="https://linktr.ee/s/about/trust-center/report?field86145911=https%3A%2F%2Flinktr.ee%2Fhmsi_its"
                    target="_blank" class="text-reset">Report</a> •
                <a href="https://linktr.ee/s/privacy" target="_blank" class="text-reset">Privacy</a> •
                <a href="#" class="text-reset">Explore</a>
            </div>
        </div>
    </div>

</body>

</html>
