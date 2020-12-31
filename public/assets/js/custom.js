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


        /**
         * Function to show all data/Student
         */

        function allStudent(){
            $.ajax({
                url:'student-all',
                success:function (data){
                    $('tbody#student_tbody').html(data);
                }

            });
        }
        allStudent();




        //Add New Student
        $(document).on('submit','form#add_student_form',function (e){
            e.preventDefault();

            let name = $('form#add_student_form input[name="name"]').val();
            let roll = $('form#add_student_form input[name="roll"]').val();
            let email = $('form#add_student_form input[name="email"]').val();
            let cell = $('form#add_student_form input[name="cell"]').val();


            if (name == '' || roll =='' || cell=='' || email==''){
                $('.mess').html('<p class="alert alert-danger">All fields are required ! <button class="close" data-dismiss = "alert">&times;</button></p>')
            }

            else if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email) == false) {

                $('.mess').html('<p class="alert alert-danger">Invalid Email  ! <button class="close" data-dismiss = "alert">&times;</button></p>')
            }

            else {

                $.ajax({
                    url : 'student-create',
                    method : "POST",
                    contentType : false,
                    processData : false,
                    data : new FormData(this),
                    success : function (data){

                        $('.mess').html('<p class="alert alert-success">Student Added Successful <button class="close" data-dismiss = "alert">&times;</button></p>')
                        $('form#add_student_form')[0].reset();
                        $('img#student_photo_preview').attr('src','');
                        allStudent();
                    }


                });
            }



        });

    });
})(jQuery)
