<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner</title>
    <style>
        
        #bannerContainer {
            position: relative;
            width: 100%;
            overflow: hidden;
            margin-top: 10px; 
            margin-bottom: 10px;
        }

        #bannerSlider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .bannerSlide {
            min-width: 100%;
            box-sizing: border-box;
        }

        #prevButton,
        #nextButton {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            color: white;
            border: none;
            padding: 10px;
            z-index: 2;
            background-color: transparent;
            opacity: 0; 
            transition: opacity 0.3s ease;
        }

        #prevButton:hover,
        #nextButton:hover {
            opacity: 1; 
            color: #64bbb6;
        }

        #prevButton {
            left: 10px;
        }

        #nextButton {
            right: 10px;
        }

        #bannerSlider:hover #prevButton,
        #bannerSlider:hover #nextButton {
            opacity: 1; 
           
        }

        #bannerSlider .bannerSlide img {
            width: 100%;
            height: auto;
            max-width: 1317px;
            max-height: 434px;
        }
    </style>
</head>
<body>

<div id="bannerContainer">
    <button id="prevButton">&lt;</button>
    <div id="bannerSlider">
        @foreach($banner as $ban)
            <div class="bannerSlide"><a href="{{$ban->Link_banner}}"><img src="{{$ban->LinkPic_banner}}" alt="Slide 1"></a></div>
        @endforeach
       
    </div>
    <button id="nextButton">&gt;</button>
</div>

<script>
    const bannerSlider = document.getElementById('bannerSlider');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    let slideIndex = 0;

    function showSlide(index) {
        if (index < 0) {
            slideIndex = bannerSlider.childElementCount - 1;
        } else if (index >= bannerSlider.childElementCount) {
            slideIndex = 0;
        } else {
            slideIndex = index;
        }

        const translateValue = -slideIndex * 100 + '%';
        bannerSlider.style.transform = 'translateX(' + translateValue + ')';
    }

    function nextSlide() {
        showSlide(slideIndex + 1);
    }

    function prevSlide() {
        showSlide(slideIndex - 1);
    }

    nextButton.addEventListener('click', nextSlide);
    prevButton.addEventListener('click', prevSlide);

    setInterval(nextSlide, 6000);
</script>

</body>
</html>
