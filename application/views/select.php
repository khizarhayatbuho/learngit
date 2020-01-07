<table border="1">  
      <tbody>  
         <tr>  
            <td>Country Id</td>  
            <td>Country Name</td>  
         </tr>  
         <?php  
         foreach ($posts->result() as $post)  
         {  
            ?><tr>  
            <td></td>  
            <td></td>  
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>  