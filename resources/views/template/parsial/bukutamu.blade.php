<style>
    .btn-deep-orange{
        background-color: orangered;
        color: white;
    }
</style>
<form  role="form"  action="{{route("saveguest")}}" method="POST"
    enctype="multipart/form-data">
    <!-- PUT Method if we are editing -->

    <!-- CSRF TOKEN -->
    @csrf

    <div class="panel-body">


        <!-- Adding / Editing -->

        <!-- GET THE DISPLAY OPTIONS -->

        <div class="form-group  col-md-12 ">

            <label class="control-label" for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="">


        </div>
        <!-- GET THE DISPLAY OPTIONS -->

        <div class="form-group  col-md-12 ">

            <label class="control-label" for="name">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" value="">


        </div>
        <!-- GET THE DISPLAY OPTIONS -->

        <div class="form-group  col-md-12 ">

            <label class="control-label" for="name">Subjek</label>
            <input type="text" class="form-control" name="subjek" placeholder="Subjek" value="">


        </div>
        <!-- GET THE DISPLAY OPTIONS -->

        <div class="form-group  col-md-12 ">

            <label class="control-label" for="name">Message</label>
            <textarea class="form-control" name="message" rows="5"></textarea>


        </div>

    </div><!-- panel-body -->

    <div class="panel-footer">
        <button type="submit" class="btn btn-rounded btn-deep-orange">Simpan</button>
    </div>
</form>
