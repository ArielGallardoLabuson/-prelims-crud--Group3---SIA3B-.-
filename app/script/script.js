

$('.update').on('click',function(){  
    $('.updatebox').css("display","flex")
    var currentrow =$(this).closest("tr");
    document.querySelector('.id').value = currentrow.find("td:eq(0)").text().trim()
    document.querySelector('.updatefirstname').value = currentrow.find("td:eq(1)").text().trim()
    document.querySelector('.updateage').value = currentrow.find("td:eq(2)").text().trim()
    document.querySelector('.updatecontact').value = currentrow.find("td:eq(3)").text().trim()
    document.querySelector('.updateemail').value = currentrow.find("td:eq(4)").text().trim()    
    document.querySelector('.inputgender').value = currentrow.find("td:eq(5)").text().trim()    
})