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
    const activityParticipants = data.participants;
    const activityType = data.type;
    const activityPrice = data.price;
    
    const name = document.createElement("h1");
    name.classList.add('smallcall');
    name.innerHTML =  activityName;
    const link = document.createElement("h2.smallcall");
    link.innerHTML =  activityLink;
    const participants = document.createElement("h2");
    participants.innerHTML =  activityParticipants;
    const type = document.createElement("h2");
    type.innerHTML =  activityType;
    const price = document.createElement("h2");
    price.innerHTML =  activityPrice;

   
    activityDiv.appendChild(name);
    activityDiv.appendChild(link);
    activityDiv.appendChild(participants);
    activityDiv.appendChild(type);
    activityDiv.appendChild(price);


  }   