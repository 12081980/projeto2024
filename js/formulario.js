const form = document.getElementById('form');
const campos= document.querySelectorAll('.required');
const spans= document.querySelectorAll('.span-required');
const emailRegex= /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$/i;
const telefoneRegex=


/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/;

function setError(index){
    campos[index].style.border = ' 2px solid #e63636';
    spans[index].style.display ='block';
}
function removeError(index){
    campos[index].style.border = '';
    spans[index].style.display ='none';
}



function nameValidate(){
if(campos[0].value.length < 3){
    setError(0);
}else{
   removeError(0);
}
}

function emailValidate(){
    if(!emailRegex.test(campos[1].value)){
        // console.log('validado')
        setError(1);
    }
    else{
        // console.log('nao validado')
        removeError(1);
    }
    }  
    
    

    

    function telefoneValidate(){
        if(!telefoneRegex.test(campos[2].value)){
           
            setError(2);
        }
        else{         
            removeError(2);
        }
        }

        function enderecoValidate(){
            if(campos[4].value.length < 3){
                setError(4);
            }else{
               removeError(4);
            }
            }
            function numeroValidate(){
                if(campos[5].value.length < 3){
                    setError(5);
                }else{
                   removeError(5);
                }
                }
                function cidadeValidate(){
                    if(campos[6].value.length < 3){
                        setError(6);
                    }else{
                       removeError(6);
                    }
                    }
                    function estadoValidate(){
                        if(campos[7].value.length < 3){
                            setError(7);
                        }else{
                           removeError(7);
                        }
                        }