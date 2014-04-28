var areaSliderIndex = 0;

$(document).ready(function() {//#image-bar .photo.show
	$("#image-bar .photo").click(function(e){
		if($("#image-bar .photo").hasClass('show')){
			$('#image-bar .photo.show').removeClass('show');
		}
		$(this).addClass('show');
		updateContent($("#image-bar .photo").index($(this)), 200);
	});
    updateContent(3, 0);
});

function updateContent(chosen, duration) {
	var showContent = content.members[chosen];
	console.log(showContent);

    $('.member-name').fadeTo(duration, 0.3, function() {
        $(this).html(showContent.name).fadeTo(duration, 1);
    });
    $('.member-role').fadeTo(duration, 0.3, function() {
        $(this).html(showContent.role).fadeTo(duration, 1);
    });
    $('.member-occupation').fadeTo(duration, 0.3, function() {
        $(this).html(showContent.occupation).fadeTo(duration, 1);
    });
    $('.member-about').fadeTo(duration, 0.3, function() {
        $(this).html(showContent.about).fadeTo(duration, 1);
    });

    //$('.member-name').html(showContent.name);
    //$('.member-role').html(showContent.role);
    //$('.member-occupation').html(showContent.occupation);
    //$('.member-about').html(showContent.about);

    //var memberDetail = '<h1>'+showContent.name+'<br><small><span>'+showContent.role+'</span><br><span>'+showContent.occupation+'</span></small></h1><div class="row"><span class="col-md-11">'+showContent.about+'</span></div>';

    //$('#member-detail').html(memberDetail);
}


var content = {
    "members": [
        {
            "name": "Chang Liu",
            "role": "Researcher",
            "occupation": "Student",
            "about": ""
        },
        {
            "name": "Mengqi Shi",
            "role": "Researcher",
            "occupation": "Biology & Environmental Policy student at Sewanee",
            "about": "Mengqi is responsible for MyH<sub>2</sub>O's research in China’s water quality, and prioritizes the water contaminants of the project’s concern. She’s also currently the International Director at CYCAN, and serves as a liaison between MyH<sub>2</sub>O and CYCAN local team."
        },
        {
            "name": "Siyi Zhang",
            "role": "Researcher",
            "occupation": "Environmental Engineering & Geosciences student at MIT-Wellesley",
            "about": "Having worked in multiple US-China organizations in green energy and climate change advocacy, Siyi is responsible for reaching out to Chinese water experts, Chinese universities, and local water testing labs for potential collaboration and data collection."
        },
        {
            "name": "Charlene Ren",
            "role": "Director of MyH<sub>2</sub>O",
            "occupation": "Graduate student in Environmental Engineering at MIT",
            "about": "Charlene manages the overall development strategy and social enterprise plan for the project. She has close connections with Chinese NGOs from her internship experience at CYCAN and Roots & Shoots, Beijing."
        },
        {
            "name": "Tommy Chan",
            "role": "Front-end Web Developer",
            "occupation": "Computer Science student at MIT",
            "about": "Tommy is responsible for building up MyH<sub>2</sub>O web site and helping in data visualization of water pollutants. He is interested in public welfare projects and has been working on Chinese and Hong Kong Sign Language Recognition System to help disadvantaged community. He is currently an undergraduate researcher in MIT Museum and MIT Media Lab."
        },
        {
            "name": "Jiajia Zhao",
            "role": "Back-end Web Developer",
            "occupation": "Computer Science student at MIT",
            "about": "Jiajia is passionate about public health and water safety in China. She is working on implementing online and mobile platform for MyH<sub>2</sub>O."
        },
        {
            "name": "Jonathan Uesato",
            "role": "Developer",
            "occupation": "Mathematics and Computer Science student at MIT",
            "about": "Jonathan has a strong quantitative and programming background. He is currently conducting data analysis research with the MIT Media Lab."
        }
    ]
};