function sendDataHighLoadBlock(idProduct, idUser, postPath){
			//отправляю POST запрос 
			//console.log(idProduct, idUser);			
		    $.post(
		    	postPath,
		    	{'idProduct':idProduct, 'idUser':idUser},
		    	function(data, status){
		    		if(status == 'success'){
		    			//$('div.wish-list a').html('Товар добавлен в список желаний');		    			
		    			console.log('Данные успешно отправлены!');
		    		}else{
		    			console.log('В процессе отправки произошла ошибка');
		    		}	
		    	}    	
		    );
}

function DelWishProduct(idUser, idProduct, postPath){
	//отправляю POST запрос  на удаления товара из блока
	//console.log(idProduct, idUser, postPath);		
	$.post(
		   postPath,
		   {'idProduct':idProduct, 'idUser':idUser},
		   function(data, status){
		   		if(status == 'success'){		   			
		    		console.log('Данные успешно отправлены для удаления!');
		    	}else{
		    		console.log('В процессе отправки произошла ошибка');
		    	}	
		    }    	
	);
}
