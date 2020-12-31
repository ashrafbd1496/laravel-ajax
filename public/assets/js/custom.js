(function ($){
    $(document).ready(function (){
        /**
         * Image Load
         */
        $('input#student_photo').change(function (e){

          let file_url = URL.createObjectURL(e.target.files[0]);

          $('img#student_photo_preview').attr('src',file_url);

        });
    });
})(jQuery)
