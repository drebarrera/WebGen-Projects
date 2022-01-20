$(document).ready(function(){
	addCount = 0;
	$('#addButton').click(function(){
		$('#formTable_1').before('<tr id="formTableAdd_'+addCount+'"><td id="<td id="formTableAdd_'+addCount+'_0"><p class="button buttonRedRing del">X</p></td><td id="formTableAdd_'+addCount+'_1"><input type="text" name="in_'+addCount+'_1" required></td><td id="formTableAdd_'+addCount+'_2"><select type="text" name="in_'+addCount+'_2"><option>Text</option><option>Image</option><option>Text + Location</option><option>Text + Image</option></select></td><td id="formTableAdd_'+addCount+'_3"><select type="text" name="in_'+addCount+'_3" required><option>Clickable</option><option>Not Clickable</option></select></td><td id="formTableAdd_'+addCount+'_4"><input type="text" name="in_'+addCount+'_4" required></td><td id="formTableAdd_'+addCount+'_5"><input type="text" name="in_'+addCount+'_5"></td><td id="formTableAdd_'+addCount+'_6"><input type="text" name="in_'+addCount+'_6"></td><td id="formTableAdd_'+addCount+'_7"><textarea type="text" name="in_'+addCount+'_7"></textarea></td><td id="formTableAdd_'+addCount+'_8"><textarea type="text" name="in_'+addCount+'_8"></textarea></td></tr>');
		addCount++;
	});
	
	$("#formTable").on("click", ".del", function() {
		$(this).parents('tr').remove();
	});
});