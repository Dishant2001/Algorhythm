function expand(){
    if(document.getElementById('dropdown').style.display=='none')
    document.getElementById('dropdown').style.display='flex';
    else
    document.getElementById('dropdown').style.display='none';
}

function startupform(){
    if(document.getElementById('startup-window').style.display=='none'){
    document.getElementById('startup-window').style.display='flex';
    document.getElementById('signup1').style.display='block';
    document.getElementById('signup-button').style.display='flex';
    document.getElementById('mentor-window').style.display='none';
    document.getElementById('student-window').style.display='none';
    document.getElementById('signup2').style.display='none';
    document.getElementById('signup3').style.display='none';
    document.getElementById('but1').style.background='red';
    }
    else{
    document.getElementById('startup-window').style.display='none';
    document.getElementById('mentor-window').style.display='none';
    document.getElementById('student-window').style.display='none';
    document.getElementById('signup1').style.display='none';
    document.getElementById('signup2').style.display='none';
    document.getElementById('signup3').style.display='none';
    document.getElementById('signup-button').style.display='none';
    document.getElementById('but1').style.background='#e9163f';
    }
}

function mentorform(){
    if(document.getElementById('mentor-window').style.display=='none'){
    document.getElementById('mentor-window').style.display='flex';
    document.getElementById('signup2').style.display='block';
    document.getElementById('startup-window').style.display='none';
    document.getElementById('student-window').style.display='none';
    document.getElementById('signup3').style.display='none';
    document.getElementById('signup1').style.display='none';
    document.getElementById('but2').style.background='red';
    }
    else{
    document.getElementById('startup-window').style.display='none';
    document.getElementById('mentor-window').style.display='none';
    document.getElementById('student-window').style.display='none';
    document.getElementById('signup2').style.display='none';
    document.getElementById('signup-button').style.display='none';
    document.getElementById('signup1').style.display='none';
    document.getElementById('signup3').style.display='none';
    document.getElementById('but2').style.background='#e9163f';
    }
}

function studentform(){
    if(document.getElementById('student-window').style.display=='none'){
    document.getElementById('student-window').style.display='flex';
    document.getElementById('signup3').style.display='block';
    document.getElementById('startup-window').style.display='none';
    document.getElementById('mentor-window').style.display='none';
    document.getElementById('signup2').style.display='none';
    document.getElementById('signup1').style.display='none';
    document.getElementById('but3').style.background='red';
    }
    else{
    document.getElementById('startup-window').style.display='none';
    document.getElementById('mentor-window').style.display='none';
    document.getElementById('student-window').style.display='none';
    document.getElementById('signup2').style.display='none';
    document.getElementById('signup-button').style.display='none';
    document.getElementById('signup1').style.display='none';
    document.getElementById('signup3').style.display='none';
    document.getElementById('but3').style.background='#e9163f';
    }
}

function mentorview(){
    if(document.getElementById('mentor').style.display=='none'){
        document.getElementById('mentor').style.display='';
        document.getElementById('applicants').style.display='none';
    }
}

function studentview(){
    if(document.getElementById('applicants').style.display=='none'){
        document.getElementById('mentor').style.display='none';
        document.getElementById('applicants').style.display='';
    }
}