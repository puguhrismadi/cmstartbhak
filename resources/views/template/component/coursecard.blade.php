<style>
    .wrap {
        margin: 30px auto 0 auto;
        width: 100%;
        display: flex;
        align-items: space-around;
        max-width: 1200px;
        background-color: white;
    }
    .wrap2{
        margin: 30px auto 0 auto;
        width: 100%;
        display: flex;
        align-items: space-around;
        max-width: 1200px;
        background-color: white;
    }

    .tile {
        width: 380px;
        height: 380px;
        margin: 10px;
        background-color: #E15A2A;
        display: inline-block;
        background-size: cover;
        position: relative;
        cursor: pointer;
        transition: all 0.4s ease-out;
        border-style: none;
        overflow: hidden;
        color: white;
        font-family: 'Poppins', sans-serif;

    }

    .tile img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 0;
        transition: all 0.4s ease-out;
    }

    .tile .text {
        /*   z-index:99; */
        position: absolute;
        padding: 30px;
        height: calc(100% - 60px);
        font-family: 'Poppins', sans-serif;
    }

    .tile h1 {

        font-weight: 300;
        margin: 0;
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        font-family: 'Poppins', sans-serif;
        font-size: 25pt;
        font-weight: bolder;
    }

    .tile h2 {
        font-weight: 100;
        margin: 20px 0 0 0;
        font-style: italic;
        transform: translateX(200px);
        font-family: 'Poppins', sans-serif;
        font-weight: bolder;
    }

    .tile p {
        font-weight: 300;
        margin: 20px 0 0 0;
        line-height: 25px;
        /*   opacity:0; */
        transform: translateX(-200px);
        transition-delay: 0.2s;
        font-family: 'Poppins', sans-serif;
    }

    .animate-text {
        opacity: 0;
        transition: all 0.6s ease-in-out;
    }

    .tile:hover {
        /*   background-color:#99aeff; */
        box-shadow: 0px 35px 77px -17px rgba(0, 0, 0, 0.64);
        transform: scale(1.05);
    }

    .tile:hover img {
        opacity: 0.2;
    }

    .tile:hover .animate-text {
        transform: translateX(0);
        opacity: 1;
    }

    .dots {
        position: absolute;
        bottom: 20px;
        right: 30px;
        margin: 0 auto;
        width: 30px;
        height: 30px;
        color: currentColor;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;

    }

    .dots span {
        width: 5px;
        height: 5px;
        background-color: currentColor;
        border-radius: 50%;
        display: block;
        opacity: 0;
        transition: transform 0.4s ease-out, opacity 0.5s ease;
        transform: translateY(30px);

    }

    .tile:hover span {
        opacity: 1;
        transform: translateY(0px);
    }

    .dots span:nth-child(1) {
        transition-delay: 0.05s;
    }

    .dots span:nth-child(2) {
        transition-delay: 0.1s;
    }

    .dots span:nth-child(3) {
        transition-delay: 0.15s;
    }


    @media (max-width: 1000px) {
        .wrap {
            flex-direction: column;
            width: 400px;
        }
    }
.card {
    border-radius:10px;
    margin:10px;
}
.myimg {
  width: 380px;
  height: 360px;
  object-fit: cover;
}
</style>
<section class="section-title">
<h2 >Our Training Service</h2>
<p>Berikut adalah Training yang tersedia di IT Cermat </p>
</section>
<div class="row">
<div style="text-align: center" class="col-md-12"  data-aos="fade-up" data-aos-delay="100">
    @foreach($pages as $key=>$fpages)
    <a href="{{url("course/$fpages->slug")}}">
    <div class="card tile">
        
        <img class="" src="{{ Voyager::image( $fpages->header_page ) }}" alt="">
        
        <div class="text">
            <h1 class="text-center">{{ $fpages->title }}</h1>
           
            <p class="animate-text"> {{$fpages->excerpt}} </p>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
   </a>
    @endforeach

</div>
</div>


</div>
