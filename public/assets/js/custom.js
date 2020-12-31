(function ($){
    $(document).ready(function (){
        /**
         * Image Load
         */
        $('input#student_photo').change(function (e){

          let file_url = URL.createObjectURL(e.target.files[0]);

          $('img#student_photo_preview').attr('src',file_url);

        });

        /*
            Datatables jquery plugin activation
         */
        $('#myTable').DataTable();

        //Add New Student
        $(document).on('submit','form#add_student_form',function (e){
            e.preventDefault();

            let name = $('form#add_student_form input[name="name"]').val();
            let roll = $('form#add_student_form input[name="roll"]').val();
            let email = $('form#add_student_form input[name="email"]').val();
            let cell = $('form#add_student_form input[name="cell"]').val();
            let photo = $('form#add_student_form input[name="photo"]').val();

            if (name == '' || roll =='' || cell=='' || email==''){
                $('.mess').html('<p class="alert alert-danger">All fields are required ! <button class="close" data-dismiss = "alert">&times;</button></p>')
            }else if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email) == false) {

                $('.mess').html('<p class="alert alert-danger">Invalid Email  ! <button class="close" data-dismiss = "alert">&times;</button></p>')
            }



        });

    });
})(jQuery)
