/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {

	User.load_user();

});



//THIS IS THE CLASS
var User = (function ()
{

	//PUBLIC OBJECT TO BE RETURNED
	var this_User = {};


	var _current_id;
        

	this_User.load_user = function ()
	{
		$.ajax({
			type: 'POST',
			url: base_url + 'Admin.php?action=load_user',
			dataType: 'json',
			cache: false,
			success: function (data)
			{
				console.log(data);
				$('#tbl_user').DataTable().destroy();

				var tr = "";
				$.each(data, function ()
				{
					tr +=
							"<tr>" +
							"<td>" + this.name + "</td>" +
							"<td>" + this.age + "</td>" +
							"<td>" + this.birthdate + "</td>" +
							"<td>" +
							"<button class='btn btn-info' onclick='User.load_user_details(" + this.sample_id + ")' > Edit </button>" +
							"<button class='btn btn-danger' onclick='User.delete_user(" + this.sample_id + ")' > Delete </button>" +
							"</td>" +
							"</tr>";
				});
				$("#tbl_user tbody").html(tr);
				$('#tbl_user').DataTable();
			},
			error: function ()
			{
				alert('Error!');
			}
		});

	};

	this_User.load_user_details = function (sample_id)
	{
		// alert(sample_id);
		$.ajax({
			type: 'POST',
			url: base_url + 'Admin.php?action=load_user_details',
			dataType: 'json',
			cache: false,
			data:
					{
						id: sample_id
					},
			success: function (data)
			{

				$.each(data, function ()
				{
					$("#txt_name").val(this.name);
					$("#txt_age").val(this.age);
					$("#txt_birthdate").val(this.birthdate);

					$('#span_for_change').html('<button class="btn btn-info btn-lg" onclick="User.update_user(' + this.sample_id + ');">UPDATE</button>');
				});

			},
			error: function ()
			{
				alert('Error!');
			}
		});
	};

	this_User.insert_user = function ()
	{
		
		var name = $("#txt_name").val();
		var age = $("#txt_age").val();
		var birthdate = $("#txt_birthdate").val();

		$.ajax({
			type: 'POST',
			url: base_url + 'Admin.php?action=insert_user',
			cache: false,
			data:
				{
					name: name,
					age: age,
					birthdate: birthdate
				},
			success: function (data)
			{
				console.log(data);
				alert("success");
				User.clear_form();
				User.load_user();
			},
			error: function ()
			{
				alert('Error!');
			}
		});

	};

	this_User.update_user = function (sample_id)
	{
		var name = $("#txt_name").val();
		var age = $("#txt_age").val();
		var birthdate = $("#txt_birthdate").val();
		$.ajax({
			type: 'POST',
			url: base_url + 'Admin.php?action=update_user',
			cache: false,
			data:
					{
						name: name,
						age: age,
						birthdate: birthdate,
						sample_id: sample_id
					},
			success: function (data)
			{
				console.log(data);
				alert("successfully Updated");
				User.clear_form();
				User.load_user();
			},
			error: function ()
			{
				alert('Error!');
			}
		});
	};

	this_User.delete_user = function (sample_id)
	{
		if (confirm("Are you sure you want to delete?")) {
			$.ajax({
				type: 'POST',
				url: base_url + 'Admin.php?action=delete_user',
				cache: false,
				data:
				{
					sample_id: sample_id
				},
				success: function (data)
				{
					console.log(data);
					alert("Successfully Deleted");
					User.clear_form();
					User.load_user();
				},
				error: function ()
				{
					alert('Error!');
				}
			});
		}
		User.clear_form();
		
	};

	this_User.clear_form = function ()
	{
		$("#txt_name").val("");
		$("#txt_age").val("");
		$("#txt_birthdate").val("");

		$('#span_for_change').html('<button class="btn btn-success btn-lg" onclick="User.insert_user();">SAVE</button>');
	};


	return this_User;
})();
//END THIS IS THE CLASS