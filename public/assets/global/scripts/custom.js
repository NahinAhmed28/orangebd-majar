function sweetAlert(text, type) {
    if(type == 'error'){
        Swal.fire({
            title: "Error!",
            text: text,
            type: "error",
        });
    }else{
        Swal.fire({
            title: "Success",
            text: text,
            icon: "success",
        });
    }
}