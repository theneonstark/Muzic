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

let main_index = 0,
songIndex,
fetchIndex,
imgIndex,
dataIndex;
const audio = new Audio();
const player = document.getElementById('player_img');
const player_prevbtn = document.getElementById('player_prevbtn');
const player_playbtn = document.getElementById('player_playbtn');
const player_nxtbtn = document.getElementById('player_nxtbtn');
const music_details = document.querySelector('.sidebar_player .top h4');
const music_card_btn = Array.from(document.querySelectorAll('.grid_layout .grid_img'));
const music_card_btn_icon = document.getElementById('cardplay_icon');
const volumeInput = document.getElementById('volume');
const volumeIcon = document.getElementById('volume_icon');

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
})


// console.log(music_card_btn);

async function fetch_data() {
    const data = await fetch("http://localhost/Muzic/fetch.php");
    const name = await data.json();
    music_card_btn.forEach((elem, index) => {
        elem.addEventListener("click", (e) => {
            fetchIndex = name.length;
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
            player_playbtn.classList.remove("bx-play-circle");
            player_playbtn.classList.add("bx-pause-circle");
        });
        
        
    })
    player_nxtbtn.onclick = () => {
        main_index++;
        if (main_index >= name.length) {
            main_index = 0;
        }
        nxt = name[main_index].Song_name;
        nxt_file = name[main_index].File_name;
        nxt_img = name[main_index].img_name;
        
        music_details.innerText = nxt;
        player.src = `uploads/img/${nxt_img}`;
        audio.src = `uploads/song/${nxt_file}`;
        audio.play();
        
        player_playbtn.classList.remove("bx-play-circle");
        player_playbtn.classList.add("bx-pause-circle");
    };
    
    player_prevbtn.onclick = () => {
        if (main_index == 0) {
            main_index = name.length-1;
        }
        
        nxt = name[main_index].Song_name;
        nxt_file = name[main_index].File_name;
        nxt_img = name[main_index].img_name;
        
        music_details.innerText = nxt;
        player.src = `uploads/img/${nxt_img}`;
        audio.src = `uploads/song/${nxt_file}`;
        audio.play();
        
        player_playbtn.classList.remove("bx-play-circle");
        player_playbtn.classList.add("bx-pause-circle");
        main_index--;
    };
}
volumeInput.addEventListener('input', (event) => {
    const volumeValue = volumeInput.value/100;
    // console.log(volumeValue);
    audio.volume = volumeValue;
    if(volumeValue==0){
        volumeIcon.classList.remove("bx-volume-full");
        volumeIcon.classList.add("bx-volume-mute");
    }else if(volumeValue<=0.3){
        volumeIcon.classList.remove("bx-volume-mute");
        volumeIcon.classList.add("bx-volume");
    }else if(volumeValue<=0.6){
        volumeIcon.classList.remove("bx-volume");
        volumeIcon.classList.add("bx-volume-low");
    }else{
        volumeIcon.classList.remove("bx-volume-low");
        volumeIcon.classList.add("bx-volume-full");
    }
});

fetch_data();