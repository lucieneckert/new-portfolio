<style>
  .pets-panel {
    position: absolute;
    right: 1rem;
    top: 2rem;
    font-family: 'JetBrains Mono', monospace;
  }

  #cat-pet {
    width: 10rem;
    height: 5rem;
    padding-top: 2.25rem;
    margin: 0rem auto;
  }

  #cat-pet * {
    transition: 0.1s;
  }

  #cat-head {
    position: absolute;
    left: 0%;
    bottom: 33%;
    width: 4rem;
  }

  #cat-body {
    position: absolute;
    left: 0%;
    bottom: 0%;
    width: 10rem;
    transform-origin: bottom center;
  }

  #cat-tail {
    position: absolute;
    right: 0%;
    bottom: 25%;
    width: 4rem;
    transition: 1s;
  }

  #cat-body:hover {
    transform: scale(1, 0.9);
  }

  #cat-head:hover {
    transform: scale(1.1, 0.9) translate(0, 0.25rem);
  }

  #cat-tail:hover {
    transform: scale(1, 1.1) rotate(45deg);
  }

  @media screen and (max-width: 55rem) {
    .pets-panel {
      display: none;
    }
  }
</style>

<div class='pets-panel box-card'>
  <h2 style="font-size: 1rem;">Portfolio Guardian</h2>
  <p style="font-size: 0.75rem;">Pets: <span id='pets'>0</span> // <br> Mood: <span id='mood'>Bored</span></p>
  <div style="position: relative;" id="cat-pet">
    <img src="/public/images/icons/cat-tail.png" alt="cat tail" id="cat-tail" />
    <img src="/public/images/icons/cat-body.png" alt="cat body" id="cat-body" />
    <img src="/public/images/icons/cat-head.png" alt="cat head" id="cat-head" />
  </div>
</div>

<script>
  let pets = 0;
  const head = document.getElementById('cat-head');
  const body = document.getElementById('cat-body');
  const tail = document.getElementById('cat-tail');
  const petSatisfied = {};
  const initPets = () => {
    resetPets();
    [head, body, tail].forEach(elem => {
      elem.onpointerover = () => {
        petSatisfied[elem.id] = true;
        checkPets();
      }
    })
  }
  const resetPets = () => {
    [head, body, tail].forEach(elem => {
      petSatisfied[elem.id] = false;
    })
  }
  const checkPets = () => {
    if (Object.entries(petSatisfied)
      .map(([k, v]) => v)
      .every(elem => elem)
    ) {
      pets += 1;
      document.getElementById('pets').innerHTML = pets;
      document.getElementById('mood').innerHTML = getMood(pets);
      resetPets();
    }
  }
  const getMood = (pets) => {
    switch (true) {
      case pets < 10:
        return 'Bored'
      case pets < 20:
        return 'Interested'
      case pets < 30:
        return 'Awake'
      case pets < 40:
        return 'Activated'
      case pets < 50:
        return 'Engaged'
      case pets < 60:
        return 'Playful'
      case pets < 70:
        return 'Energetic'
      case pets < 80:
        return 'Ecstatic'
      case pets < 90:
        return 'Overjoyed'
      case pets < 100:
        return 'Blissful'
      default:
        return '🎉 Absolutely euphoric. Well done. Fantastic petting.'
    }
  }
  initPets();
  console.log(petSatisfied);
</script>