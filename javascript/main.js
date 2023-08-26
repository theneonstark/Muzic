let image = document.getElementById('Image'),
song = document.getElementById('Music');

let imageTxt = document.getElementById('image_detail'),
songtxt = document.getElementById('song_detail');
// console.log(image,song);

song = onchange = () => {
    let inputImage = document.getElementById('Image',).files[0];
    imageTxt.innerText = inputImage.name;
    let inputSong = document.getElementById('Music').files[0];
    songtxt.innerText = inputSong.name;
};

// fetch("http://localhost/Muzic/fetch.php").then(res => res.json())
//     .then((result)=>{
//         console.log(result[0].File_name);
//     })

let songIndex,
fetchIndex,
imgIndex,
dataIndex;
let audio = new Audio();
let player = document.getElementById('player_img');
let player_prevbtn = document.getElementById('player_prevbtn');
let player_playbtn = document.getElementById('player_playbtn');
let player_nxtbtn = document.getElementById('player_nxtbtn');
let music_details = document.querySelector('.sidebar_player .top h4');
let music_card_btn = Array.from(document.querySelectorAll('.grid_layout .grid_img button'));
let music_card_btn_icon = document.getElementById('cardplay_icon');

player_playbtn.addEventListener("click", ()=>{
    if(audio.paused){
        audio.play();
        player_playbtn.classList.remove("bx-play-circle");
        player_playbtn.classList.add("bx-pause-circle");
    }else{
        audio.pause();
        player_playbtn.classList.add("bx-play-circle");
        player_playbtn.classList.remove("bx-pause-circle");

    }
})


// console.log(music_card_btn);

async function fetch_data(){
    const data = await fetch("http://localhost/Muzic/fetch.php");
    const name = await data.json();
    music_card_btn.forEach((elem,index)=>{
        elem.addEventListener("click", (e) => {
            fetchIndex = name[index];
            console.log(fetchIndex)
            dataIndex = e.target = name[index].Song_name;
            songIndex = e.target = name[index].File_name;
            imgIndex = e.target = name[index].img_name;
            // console.log(songIndex);
            music_details.innerText = dataIndex;
            player.src = `uploads/img/${imgIndex}`; 
            audio.src = `uploads/song/${songIndex}`;
            audio.play();
            music_card_btn_icon.classList.remove("bx-play-circle");
            music_card_btn_icon.classList.add("bx-pause-circle");
            player_nxtbtn.classList.add("bx-pause-circle");
            player_playbtn.classList.remove("bx-play-circle");
            player_playbtn.classList.add("bx-pause-circle");
    }); 
})
}

fetch_data();