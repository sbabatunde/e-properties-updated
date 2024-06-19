//Custom Profile Form
const myProfileContainer = document.querySelector('#myProfile');
const editProfileContainer = document.querySelector('#editProfile');

let myProfile = function(){
    console.log('Test');
    myProfileContainer.style.display = "block";
    editProfileContainer.style.display = "none";
}

let editProfile = function(){
    myProfileContainer.style.display = "none";
    editProfileContainer.style.display = "block";
}

//End Profile Form

    //Custom Listings Search
    const salesListingsContainer = document.querySelector('#salesListings');
    const shortletsListingsContainer = document.querySelector('#shortletsListings');
    const rentsListingsContainer = document.querySelector('#rentsListings');
    const landListingsContainer = document.querySelector('#landListings');

    let salesL = function(){
        salesListingsContainer.style.display = "block";
        shortletsListingsContainer.style.display = "none";
        rentsListingsContainer.style.display = "none";
        landListingsContainer.style.display = "none";
    }

    let shortletsL = function(){
        salesListingsContainer.style.display = "none";
        shortletsListingsContainer.style.display = "block";
        rentsListingsContainer.style.display = "none";
        landListingsContainer.style.display = "none";
    }
    let rentsL = function(){
        salesListingsContainer.style.display = "none";
        shortletsListingsContainer.style.display = "none";
        rentsListingsContainer.style.display = "block";
        landListingsContainer.style.display = "none";
    }
    let landL = function(){
        salesListingsContainer.style.display = "none";
        shortletsListingsContainer.style.display = "none";
        rentsListingsContainer.style.display = "none";s
        landListingsContainer.style.display = "block";
    }

//End Listings Search

//Begin Property Sub-category Form Show/Hide
var residential = document.getElementById('residence');
var commercial = document.getElementById("commerce");
let subCategory = function(that){
    console.log(that.value);
    if(that.value !== "Residential")
    {
        commercial.style.display = "block";
        residential.style.display = "none";
    }
    else if(that.value == "Residential"){
        commercial.style.display = "none";
        residential.style.display = "block";
    }
    else{
        commercial.style.display = "none";
        residential.style.display = "none";
    }
}


//Begin Property Deal Form Show/Hide
const dealDetails = document.getElementById('PropDeal');
var dealCheckBox = document.getElementById("myDeal");
let propertyDeal = function(){
    if(dealCheckBox.checked == true)
    {
        dealDetails.style.display = "block";
    }
    else{
        dealDetails.style.display = "none";
    }
}


// Begin keep button Group active on click
const btnFocus = document.querySelectorAll('.active-btn-group');

btnFocus.forEach(btnGroup => {
    btnGroup.addEventListener('click', () => {
        document.querySelector('.req-target')?.classList.remove('req-target');
        btnGroup.classList.add('req-target');
    });
});
// Begin keep button group active on click
