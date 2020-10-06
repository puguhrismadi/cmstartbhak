<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');

body {
    font-family: 'Montserrat', sans-serif;
    background-color: #eee
}

.amount {
    font-size: 40px;
    font-weight: 700
}

.margins {
    margin-top: 16px
}

/* .outline-button {
    background-color: transparent !important;
    border-color: #8E24AA !important;
    color: #8E24AA
}

.outline-button:hover,
.outline-button:active,
.outline-button:visited,
.outline-button:focus {
    background-color: #8E24AA !important;
    border-color: #8E24AA !important;
    color: #fff;
    outline: 0 !important;
    box-shadow: none !important
}

.normal-button {
    background-color: #8E24AA !important;
    border-color: #8E24AA !important;
    color: #fff
}

.normal-button:hover,
.normal-button:active,
.normal-button:visited,
.normal-button:focus {
    background-color: #760a92 !important;
    border-color: #760a92 !important;
    outline: 0 !important;
    box-shadow: none !important;
    color: #fff
} */

.check i {
    margin-top: 10px;
    margin-bottom: 10px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background-color: #b9f6ca82;
    line-height: 38px;
    font-size: 17px;
    color: #00800085;
    font-weight: 300
}
</style>
<div class="container-fluid mt-5 mb-5">
    <table class="table bg-white table-bordered" data-aos="fade-up">
        <tbody>
            <tr>
                <th scope="column"><span class="font-weight-bold"><h2>Materi</h2></th>
                <td>
                    <div class="d-flex flex-row justify-content-between align-items-baseline mt-0"> <h5 class="font-weight-bold">Workshop</h5>
                         
                    </div> 
                </td>
                <td>
                    <div class="d-flex flex-row justify-content-between align-items-baseline mt-0"> <h5 class="font-weight-bold">Reguler Class</h5>
                        
                    </div> 
                </td>
                
            </tr>
            @foreach ($page->materi as $materi)
            
            
           
            <tr>
                <th scope="row"> <span class="d-block">{{$materi->nama_materi}}</span> <span class="font-weight-light">{{$materi->deskripsi}}</span> </th>
                <td>@if ($materi->is_workshop==1)
                    <div class="text-center check"> <i class="fa fa-check"></i> </div>
                @endif
                    
                </td>
                <td>
                    @if ($materi->is_reguler==1)
                    <div class="text-center check"> <i class="fa fa-check"></i> </div>
                    @endif
                    
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th scope="column"><span class="font-weight-bold"><h3>Price</h3> </span></th>
                <td>
                    <div class="d-flex flex-row justify-content-between align-items-baseline mt-0"> 
                        <div class="price d-flex flex-row align-items-center"> <span class="margins"></span> <h3>@currency($page->price_workshop)</h3> <span class="margins"></span> </div>
                    </div> 
                </td>
                <td>
                    <div class="d-flex flex-row justify-content-between align-items-baseline mt-0"> 
                        <div class="price d-flex flex-row align-items-center"> <span class="margins"></span> <h3 >@currency($page->price_reguler)</h3> <span class="margins"></span> </div>
                    </div> 
                </td>
                
            </tr>
        </tfoot>
    </table>
   
</div>

<div class="container"><a href="{{url("/registrasi")}}" class="btn btn-success">Register</a></div>