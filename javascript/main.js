// fetch("http://localhost/Muzic/fetch.php").then(res => res.json())
//     .then((result)=>{
//     })

let main_index = 0,
  songIndex,
  fetchIndex,
  imgIndex,
  singerIndex,
  dataIndex;
const audio = new Audio();
const player = document.getElementById("player_img");
const wplayer = document.getElementById("wplayer_img");
const player_prevbtn = document.getElementById("player_prevbtn");
const player_playbtn = document.getElementById("player_playbtn");
const player_nxtbtn = document.getElementById("player_nxtbtn");
const wplayer_prevbtn = document.getElementById("wplayer_prevbtn");
const wplayer_playbtn = document.getElementById("wplayer_playbtn");
const wplayer_nxtbtn = document.getElementById("wplayer_nxtbtn");
const music_details = document.querySelector(".sidebar_player .top h4");
const wmusic_details = document.querySelector(".wide_music_container h1");
const singer_name = document.querySelector(".wide_music_container h3");
const music_card_btn = Array.from(
  document.querySelectorAll(".grid_layout .grid_img button")
);
const music_card_btn_play = document.querySelector(
  ".grid_layout .grid_img button i"
);
const volumeInput = document.getElementById("volume");
const volumeIcon = document.getElementById("volume_icon");
const play_duration = document.getElementById("play_duration");
const player_duration = document.getElementById("player_duration");
const final_duration = document.getElementById("final_duration");

player_playbtn.addEventListener("click", () => {
  if (audio.paused) {
    audio.play();
    player_playbtn.classList.remove("bx-play-circle");
    player_playbtn.classList.add("bx-pause-circle");
  } else {
    audio.pause();
    player_playbtn.classList.add("bx-play-circle");
    player_playbtn.classList.remove("bx-pause-circle");
  }
});

wplayer_playbtn.addEventListener("click", () => {
  if (audio.paused) {
    audio.play();
    wplayer_playbtn.classList.remove("bx-play-circle");
    player_playbtn.classList.add("bx-pause-circle");
  } else {
    audio.pause();
    wplayer_playbtn.classList.add("bx-play-circle");
    player_playbtn.classList.remove("bx-pause-circle");
  }
});


async function fetch_data() {
  const data = await fetch("http://localhost/Muzic/fetch.php");
  const name = await data.json();
  music_card_btn.forEach((elem, index) => {
    elem.addEventListener("click", (e) => {
      fetchIndex = name.length;
      classIndex = parseInt(e.target.id);
      const idName = document.getElementById(classIndex);
      dataIndex = e.target = name[index].Song_name;
      singerIndex = e.target = name[index].Singer_name;
      songIndex = e.target = name[index].File_name;
      imgIndex = e.target = name[index].img_name;
      music_details.innerText = dataIndex;
      wmusic_details.innerText = dataIndex;
      singer_name.innerText = singerIndex;
      player.src = `Uploads/img/${imgIndex}`;
      wplayer.src = `Uploads/img/${imgIndex}`;
      audio.src = `Uploads/song/${songIndex}`;
      audio.play();
      audio.addEventListener("loadedmetadata", () => {
        let min = "0" + Math.floor(audio.duration / 60);
        let sec = "0" + Math.floor(audio.duration - min * 60);
        let dura = min.substr(-2) + ":" + sec.substr(-2);
        final_duration.innerHTML = dura;
        audio.addEventListener("timeupdate", () => {
          progress = parseInt((audio.currentTime / audio.duration) * 100);
          let timeline = Math.round(parseInt(audio.currentTime));
          play_duration.innerHTML = Math.round(parseInt(audio.currentTime))
          
          if(timeline <= 9){
            play_duration.innerHTML = `00:0${timeline}`;
          }else{
            play_duration.innerHTML = `00:${timeline}`;
            if(timeline >= 60){
              let a = Math.floor(audio.currentTime/60);
              let b = Math.floor(audio.currentTime - a * 60)
              play_duration.innerHTML = `0${a}:0${b}`;
              if(b >= 10){
                play_duration.innerHTML = `0${a}:${b}`;
              }
            }
          }
          player_duration.value = progress;
        });
        player_duration.addEventListener("input", () => {
          audio.currentTime = (player_duration.value * audio.duration) / 100;
        });
      });
      player_playbtn.classList.remove("bx-play-circle");
      wplayer_playbtn.classList.remove("bx-play-circle");
      player_playbtn.classList.add("bx-pause-circle");
      wplayer_playbtn.classList.add("bx-pause-circle");
    });
  });

  player_nxtbtn.onclick = () => {
    main_index++;
    if (main_index >= name.length) {
      main_index = 0;
    }
    nxt = name[main_index].Song_name;
    nxt_file = name[main_index].File_name;
    nxt_img = name[main_index].img_name;

    music_details.innerText = nxt;
    player.src = `Uploads/img/${nxt_img}`;
    audio.src = `Uploads/song/${nxt_file}`;
    wmusic_details.innerText = nxt;
    wplayer.src = `Uploads/img/${nxt_img}`;
    audio.src = `Uploads/song/${nxt_file}`;
    audio.play();

    player_playbtn.classList.remove("bx-play-circle");
    player_playbtn.classList.add("bx-pause-circle");
  };

  wplayer_nxtbtn.onclick = () => {
    main_index++;
    if (main_index >= name.length) {
      main_index = 0;
    }
    nxt = name[main_index].Song_name;
    nxt_file = name[main_index].File_name;
    nxt_img = name[main_index].img_name;

    wmusic_details.innerText = nxt;
    wplayer.src = `Uploads/img/${nxt_img}`;
    audio.src = `Uploads/song/${nxt_file}`;
    music_details.innerText = nxt;
    player.src = `Uploads/img/${nxt_img}`;
    audio.src = `Uploads/song/${nxt_file}`;
    audio.play();

    wplayer_playbtn.classList.remove("bx-play-circle");
    wplayer_playbtn.classList.add("bx-pause-circle");
  };

  player_prevbtn.onclick = () => {
    if (main_index == 0) {
      main_index = name.length - 1;
    }

    nxt = name[main_index].Song_name;
    nxt_file = name[main_index].File_name;
    nxt_img = name[main_index].img_name;

    music_details.innerText = nxt;
    player.src = `Uploads/img/${nxt_img}`;
    audio.src = `Uploads/song/${nxt_file}`;
    wmusic_details.innerText = nxt;
    wplayer.src = `Uploads/img/${nxt_img}`;
    audio.src = `Uploads/song/${nxt_file}`;
    audio.play();

    player_playbtn.classList.remove("bx-play-circle");
    player_playbtn.classList.add("bx-pause-circle");
    main_index--;
  };

  wplayer_prevbtn.onclick = () => {
    if (main_index == 0) {
      main_index = name.length - 1;
    }

    nxt = name[main_index].Song_name;
    nxt_file = name[main_index].File_name;
    nxt_img = name[main_index].img_name;

    wmusic_details.innerText = nxt;
    wplayer.src = `Uploads/img/${nxt_img}`;
    audio.src = `Uploads/song/${nxt_file}`;
    music_details.innerText = nxt;
    player.src = `Uploads/img/${nxt_img}`;
    audio.src = `Uploads/song/${nxt_file}`;
    audio.play();

    wplayer_playbtn.classList.remove("bx-play-circle");
    wplayer_playbtn.classList.add("bx-pause-circle");
    main_index--;
  };
}
volumeInput.addEventListener("input", (event) => {
  const volumeValue = volumeInput.value / 100;
  audio.volume = volumeValue;
  if (volumeValue == 0) {
    volumeIcon.classList.remove("bx-volume-full");
    volumeIcon.classList.add("bx-volume-mute");
  } else if (volumeValue <= 0.3) {
    volumeIcon.classList.remove("bx-volume-mute");
    volumeIcon.classList.add("bx-volume");
  } else if (volumeValue <= 0.6) {
    volumeIcon.classList.remove("bx-volume");
    volumeIcon.classList.add("bx-volume-low");
  } else {
    volumeIcon.classList.remove("bx-volume-low");
    volumeIcon.classList.add("bx-volume-full");
  }
});

fetch_data();

let player_btn = document.getElementById("player_btn");
let wideplayer = document.getElementById("player");

player_btn.onclick = () => {
  wideplayer.classList.toggle("show");
};

const container = document.querySelector(".slider_container");
const slider = document.querySelector(".mainslider");
const nxt_btn = document.getElementById("next");
const prv_btn = document.getElementById("prev");
let slides = document.querySelectorAll(".slider");
let index = 1;
let slider_slides;

const first_clone = slides[0].cloneNode(true);
const last_clone = slides[slides.length - 1].cloneNode(true);

first_clone.id = "fclone";
last_clone.id = "lclone";

slider.append(first_clone);
slider.prepend(last_clone);

const slidewidth = slides[index].clientWidth;
slider.style.transform = `translateX(${-slidewidth * index}px)`;

const start = () => {
  slider_slides = setInterval(() => {
    nxtslide();
  }, 2000);
};

slider.addEventListener("transitionend", () => {
  let slides = document.querySelectorAll(".slider");
  if (slides[index].id === first_clone.id) {
    slider.style.transition = "none";
    index = 1;
    slider.style.transform = `translateX(${-slidewidth * index}px)`;
  }

  if (slides[index].id === last_clone.id) {
    slider.style.transition = "none";
    index = slides.length - 1;
    slider.style.transform = `translateX(${-slidewidth * index}px)`;
  }
});

const nxtslide = () => {
  let slides = document.querySelectorAll(".slider");
  if (index >= slides.length - 1) return;
  index++;
  slider.style.transform = `translateX(${-slidewidth * index}px)`;
  slider.style.transition = ".7s";
};

const prevslide = () => {
  let slides = document.querySelectorAll(".slider");
  if (index <= 0) return;
  index--;
  slider.style.transform = `translateX(${-slidewidth * index}px)`;
  slider.style.transition = ".7s";
};

container.addEventListener("mouseenter", () => {
  clearInterval(slider_slides);
});

container.addEventListener("mouseleave", start);

nxt_btn.addEventListener("click", nxtslide);
prv_btn.addEventListener("click", prevslide);

start();

$(document).ready(function () {
  $(".notic > div").slideUp(10);
  $("#notification").click(function () {
    $("#notification").toggleClass("bx-notification-off");
    $(".notic > div").slideToggle("slow");
    $(".notic").css("display", "block");
  });
});
