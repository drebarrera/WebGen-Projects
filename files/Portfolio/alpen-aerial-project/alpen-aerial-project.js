$(document).ready(function(){
	var addCount = 0;
	<?php 
	    $companies = scandir('../alpenaerial/');
	    $companies = json_encode($companies);
	    echo "var companies = ". $companies . ";\n";
	?>

    clients = {};
    
	for(var i = 0; i < companies.length; i++){
	    if(companies[i] != '.' && companies[i] != '..'){
	        client = companies[i].replace('.txt','').replaceAll('_',' ').split('-')[0];
	        project = companies[i].replace('.txt','').replaceAll('_',' ').split('-')[1];
		    $('#clientSelect').append('<option>'+client+'<\option>');
		    clients[client] == null ? clients[client] = [project] : clients[client].push(project);
		    if($('#clientSelect').children().last().val() == ''){
		        $('#clientSelect').children().last().remove();
		    }
	    }
	}
	
	$('#fill').hide();
	$('.projectSelect').hide();
	
	<?php echo "var txt_url = '". $txt_url . "';\n"; ?>
	<?php echo "var company_name = '". $company_name . "';\n"; ?>	
	<?php echo "var project_name = '". $project_name . "';\n"; ?>

    if(txt_url){
        $('#fill').show();
	    $('.projectSelect').show();
        <?php $content = file_get_contents($txt_url); ?>
    	<?php echo "var formContent = '". $content . "';\n"; ?>
    	$('#clientSelect').val(company_name);
		for(var i = 0; i < clients[$('#clientSelect').val()].length; i++){
			company = $('#clientSelect').val();
			project = clients[company][i];
			$('#projectSelect').append('<option>'+project+'<\option>');
			if($('#clientSelect').children().last().val() == ''){
	            $('#clientSelect').children().last().remove();
	        }
		}
		$('#projectSelect').val(project_name);
		var content = formContent.split('xxiixx');
		var content_0 = content[0].split('xxixx');

		$('select[name="name"]').val(content_0[0]);
		$('input[name="project"]').val(content_0[1]);
		$('input[name="company"]').val(content_0[2]);
		$('input[name="contact"]').val(content_0[3]);
		$('input[name="clientEmail"]').val(content_0[4]);
		$('input[name="clientPhone"]').val(content_0[5]);
		$('textarea[name="description"]').val(content_0[6]);
		var addCount = 0;
		for(var i = 1; i < content.length - 1; i++){
		    content_num = content[i].split('xxixx');
		    $('#formTable_1').before('<tr id="formTableAdd_'+addCount+'"><td id="<td id="formTableAdd_'+addCount+'_0"><p class="button buttonRedRing del">X</p></td><td id="formTableAdd_'+addCount+'_1"><input type="text" name="old_'+addCount+'_1" required></td><td id="formTableAdd_'+addCount+'_2"><select type="text" name="old_'+addCount+'_2"><option>Text</option><option>Image</option><option>Text + Location</option><option>Text + Image</option></select></td><td id="formTableAdd_'+addCount+'_3"><select type="text" name="old_'+addCount+'_3" required><option>Clickable</option><option>Not Clickable</option></select></td><td id="formTableAdd_'+addCount+'_4"><input type="text" name="old_'+addCount+'_4"></td><td id="formTableAdd_'+addCount+'_5"><input type="text" name="old_'+addCount+'_5"></td><td id="formTableAdd_'+addCount+'_6"><input type="text" name="old_'+addCount+'_6"></td><td id="formTableAdd_'+addCount+'_7"><textarea type="text" name="old_'+addCount+'_7"></textarea></td><td id="formTableAdd_'+addCount+'_8"><textarea type="text" name="old_'+addCount+'_8"></textarea></td></tr>');
		    addCount++;
		    $('input[name="old_'+(i-1).toString()+'_1').val(content_num[0]);
		    $('select[name="old_'+(i-1).toString()+'_2').val(content_num[1]);
		    $('select[name="old_'+(i-1).toString()+'_3').val(content_num[2]);
		    $('input[name="old_'+(i-1).toString()+'_4').val(content_num[3]);
		    $('input[name="old_'+(i-1).toString()+'_5').val(content_num[4]);
		    $('input[name="old_'+(i-1).toString()+'_6').val(content_num[5]);
		    $('textarea[name="old_'+(i-1).toString()+'_7').val(content_num[6]);
		    $('textarea[name="old_'+(i-1).toString()+'_8').val(content_num[7]);
		}
    }

	function projectf(company, project){
		file = '../alpenaerial/'+company.replaceAll(' ', '_')+'-'+project.replaceAll(' ', '_')+'.txt';
		$('input[name="txt_url"]').val(file);
		$('input[name="company_name"]').val(company);
		$('input[name="project_name"]').val(project);
		document.getElementById('hiddenForm').submit();
	}
	var company = '';
	var project = '';

	$('#clientSelect').bind('input propertychange', function() {
		if($(this).val() == ''){
			$('#fill').hide();
			$('.projectSelect').hide();
		}
		else if($(this).val() == 'New Client'){
			$('#fill').show();
			$('input[text]').val('');
			$('textarea').val('');
			$('.projectSelect').hide();
		}
		else{
			$('#fill').hide();
			$('.projectSelect').show();
			for(var i = 0; i < clients[$('#clientSelect').val()].length; i++){
				company = $('#clientSelect').val();
				project = clients[company][i];
				$('#projectSelect').append('<option>'+project+'<\option>');
				if($('#projectSelect').children().last().val() == ''){
		            $('#projectSelect').children().last().remove();
		        }
			}
		}
	});

	$('#projectSelect').bind('input propertychange', function() {
		if($(this).val() == ''){
			$('#fill').hide();
		}
		else if($(this).val() == 'New Project'){
			$('#fill').show();
			$('input[type=text]').val('');
			$('textarea').val('');
		}
		else{
		    $('#fill').show();
		    projectf(company, project);
		}
	});


	$('#addButton').click(function(){
		$('#formTable_1').before('<tr id="formTableAdd_'+addCount+'"><td id="<td id="formTableAdd_'+addCount+'_0"><p class="button buttonRedRing del">X</p></td><td id="formTableAdd_'+addCount+'_1"><input type="text" name="in_'+addCount+'_1" required></td><td id="formTableAdd_'+addCount+'_2"><select type="text" name="in_'+addCount+'_2"><option>Text</option><option>Image</option><option>Text + Location</option><option>Text + Image</option></select></td><td id="formTableAdd_'+addCount+'_3"><select type="text" name="in_'+addCount+'_3" required><option>Clickable</option><option>Not Clickable</option></select></td><td id="formTableAdd_'+addCount+'_4"><input type="text" name="in_'+addCount+'_4"></td><td id="formTableAdd_'+addCount+'_5"><input type="text" name="in_'+addCount+'_5"></td><td id="formTableAdd_'+addCount+'_6"><input type="text" name="in_'+addCount+'_6"></td><td id="formTableAdd_'+addCount+'_7"><textarea type="text" name="in_'+addCount+'_7"></textarea></td><td id="formTableAdd_'+addCount+'_8"><textarea type="text" name="in_'+addCount+'_8"></textarea></td></tr>');
		addCount++;
	});
	
	$("#formTable").on("click", ".del", function() {
		$(this).parents('tr').remove();
	});
});