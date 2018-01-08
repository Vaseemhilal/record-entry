///function for validating the student form////
function valid_student(frm_obj)
{
		if(frm_obj.st_name.value=="")
		{
			alert("Please enter your name.");	
			frm_obj.st_name.focus();
			return false;
		}
		if(frm_obj.st_father.value=="")
		{
			alert("Please enter your fathers name.");	
			frm_obj.st_father.focus();
			return false;
		}
		if(frm_obj.st_add1.value=="")
		{
			alert("Please enter your address 1.");	
			frm_obj.st_add1.focus();
			return false;
		}
		if(frm_obj.st_add2.value=="")
		{
			alert("Please enter your address 2.");	
			frm_obj.st_add2.focus();
			return false;
		}
		if(frm_obj.st_city.value==0)
		{
			alert("Please select your city.");	
			frm_obj.st_city.focus();
			return false;
		}
		if(frm_obj.st_state.value==0)
		{
			alert("Please select your state.");	
			frm_obj.st_state.focus();
			return false;
		}
		if(frm_obj.st_country.value==0)
		{
			alert("Please select your country.");	
			frm_obj.st_country.focus();
			return false;
		}
		if(frm_obj.st_nationality.value=="")
		{
			alert("Please enter your nationality.");	
			frm_obj.st_nationality.focus();
			return false;
		}
		if(frm_obj.st_gender[0].checked==false && frm_obj.st_gender[1].checked==false)
		{
			alert("Please select your gender.");	
			frm_obj.st_gender[0].focus();
			return false;
		}
		if(frm_obj.st_course.value==0)
		{
			alert("Please select your course.");	
			frm_obj.st_course.focus();
			return false;
		}
		if(frm_obj.st_hobbies.value=="")
		{
			alert("Please enter your hobbies.");	
			frm_obj.st_hobbies.focus();
			return false;
		}
		if(frm_obj.st_mobile.value=="")
		{
			alert("Please enter your mobile.");	
			frm_obj.st_mobile.focus();
			return false;
		}
		/validation for multiple checkboxes///
		var cck=false;
		var element_length=frm_obj.elements.length;
		for(i=0;i<element_length;i++)
		{
				if(frm_obj.elements[i].name=="st_qul[]")
				{
						if(frm_obj.elements[i].checked==true)
						{
							cck=true;
							break;
						}
				}
		}
		if(cck==false)
		{
			alert("please select your qualification");
			return false;
		}
		return true;
}
///function for delete student///
function delete_student(st_id)
{
	if(confirm("Do you want to delete the student?"))
	{
		this.document.student_view.st_id.value=st_id;
		this.document.student_view.act.value="delete_student";
		this.document.student_view.submit();
	}
}
function delete_multiple_students()
{
	if(confirm("Do you want to delete the selected students?"))
	{
		this.student_view.act.value="delete_multiple_students";
		this.student_view.submit();
	}
}
function check_all(obj)
{
	var frm_obj=this.document.student_view;
	var length=frm_obj.elements.length;
	for(i=0;i<length;i++)
	{
		if(frm_obj.elements[i].type =="checkbox")
		{
			frm_obj.elements[i].checked=obj.checked;
		}
	}
}
			   
