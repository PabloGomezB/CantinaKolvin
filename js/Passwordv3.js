/**
 * Funcion para validar un password
 * 
 * @param {string} password - El password a validar
 * @param {object} nuevaConfig - Un objeto de configuracion con valores por defecto
 * {
 *     size : 8,
 *     uppercase : 1,
 *     numbers : 2,
 *     special : "$#%&-!?"
 * }
 * @returns {object} respuesta - Un objeto con el resultado de las diferentes pruebas
 */

function passwordValidation(pwd, nuevaConfig) {
   let config = nuevaConfig ||  {
      size : 8,
      uppercase : 1,
      minus : 1,
 }
  
 let respuesta = {
    long: false,
    uppercase: false,
    minus:false,
 }

  //the string has 10 characters or more  
  if (pwd.length >= config.size) respuesta.long=true;

  //the string contains at least one letter in uppercase  
  let letras="ABCDEFGHYJKLMNÑOPQRSTUVWXYZ";
  let count=0;
  for(i=0; i<pwd.length; i++){
      if (letras.indexOf(pwd.charAt(i),0)!=-1){
         count++;
      }
   }
  
  if (count>=config.uppercase) respuesta.uppercase=true;

  // el string contiene letra en minuscula
  let letrasMinus="abcdefghijklmnñopqrstuvwxyz";
  let aux=0;
  for(i=0; i<pwd.length; i++){
      if (letrasMinus.indexOf(pwd.charAt(i),0)!=-1){
         aux++;
      }
   }
  
  if (aux>=config.minus) respuesta.minus=true;
 /*
  //the string contains at least 2 numbers (digits)
  letras="0123456789";
  count=0;
  for(i=0; i<pwd.length; i++){
      if (letras.indexOf(pwd.charAt(i),0)!=-1){
         count++;
      }
   }

  if (count>=config.numbers) respuesta.numeros =true;
 
  //the string contains at least one of these special characters: $ # % & - ! ?  
  count=0;
  for(i=0; i<pwd.length; i++){
      if (config.special.indexOf(pwd.charAt(i),0)!=-1){
         count++;
      }
   }
  console.log(pwd + " " + count)
  if (count>=1) respuesta.simbolos=true;
 */
  return respuesta;
}
