

        $(document).ready(function() {
            
            pageSetUp();

            var $registerForm = $("#smart-form-register").validate({
    
                // Rules for form validation
                rules : {
                    username : {
                        required : true
                    },
                    email : {
                        required : true,
                        email : true
                    },
                    pass : {
                        required : true,
                        minlength : 3,
                        maxlength : 20
                    },
                    passwordConfirm : {
                        required : true,
                        minlength : 3,
                        maxlength : 20,
                        equalTo : '#password'
                    },
                    name : {
                        required : true
                    },
                    sname : {
                        required : true
                    },
                    com_name : {
                        required : true
                    },
                    com_sector : {
                        required : true
                    },
                    com_nipt : {
                        required : true
                    },
                    nr_emp : {
                        required : true
                    },
                    com_add : {
                        required : true
                    },
                    terms : {
                        required : true
                    },
                    terms : {
                        required : true
                    }
                },
    
                // Messages for form validation
                messages : {
                    login : {
                        required : 'Please enter your login'
                    },
                    email : {
                        required : 'Please enter your email address',
                        email : 'Please enter a VALID email address'
                    },
                    pass : {
                        required : 'Please enter your password'
                    },
                    passwordConfirm : {
                        required : 'Please enter your password one more time',
                        equalTo : 'Please enter the same password as above'
                    },
                    name : {
                        required : 'Please select your first name'
                    },
                    sname : {
                        required : 'Please select your last name'
                    },
                    com_name : {
                        required : 'Please select Company Name'
                    },
                    com_nipt : {
                        required : 'Please select Company NIPT'
                    },
                    com_sector : {
                        required : 'Please select Company Sector'
                    },
                    sonis : {
                        required : 'Please write your recent work experience'
                    },
                    uni : {
                        required : 'Please write your University name!'
                    },
                    terms : {
                        required : 'You must agree with Terms and Conditions'
                    }
                },
    
                // Do not change code below
                errorPlacement : function(error, element) {
                    error.insertAfter(element.parent());
                }
            });
    

        
        })

