   function checkFormBeforeSubmit(){

        document.getElementById("uploadform").onsubmit = function(){
            if(category.selectedIndex == 0){
                document.getElementById("categoryerror").innerHTML = "Please Select the image category";
                return false;
            }else if(language.selectedIndex == 0){
                document.getElementById("languageerror").innerHTML = "Please Select the language on image";
                return false;
            }else if(country.selectedIndex == 0 ){
                document.getElementById("countryerror").innerHTML = "Please Select your country";
                return false;
            }else{

                return true;
            }
        };

    }

    window.onload = function(){
        checkFormBeforeSubmit();
    };
