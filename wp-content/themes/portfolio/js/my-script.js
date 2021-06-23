fetch("https://www.boredapi.com/api/activity?participants=1 ")
  .then((response) => {
    if (response.ok) {
      return response.json();
    } else {
      throw new Error("NETWORK RESPONSE ERROR");
    }
  })
  .then(data => {
    console.log(data);
    displayActivity(data);
  })
  .catch((error) => console.error("FETCH ERROR:", error));

  function displayActivity(data) {
    // je choisi l'element HTML pour injecter le data 
    const activityDiv = document.getElementById("activity-name");

    const activityName = data.activity;
    const activityLink = data.link;
  
    const activityType = data.type;
    const activityPrice = data.price;
    
    const name = document.createElement("h1");
  
    name.classList.add('activity-name-style');
    name.innerHTML =  "Activity: " + activityName;


    const link = document.createElement("a");
    link.classList.add('smallcall');
    link.innerHTML =  "Link: " + "<a href=" + activityLink + ">" + activityName +  "</a>" ;
    // si le lien n'existe pas, j'ajoute la classe 'display-none', on ne l'affiche pas 
    if (activityLink == 0){
      link.classList.add('display-none');
    }


    const type = document.createElement("p");
    type.classList.add('smallcall');
    type.innerHTML =  "Type of activity: " + activityType;

    const price = document.createElement("p");
    price.classList.add('smallcall');
    price.innerHTML =  "Price: " + activityPrice;

   
    activityDiv.appendChild(name);
    activityDiv.appendChild(link);
    activityDiv.appendChild(type);
    activityDiv.appendChild(price);
  }   