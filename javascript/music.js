let main_index1 = 0,
songIndex1,
fetchIndex1,
imgIndex1,
singerIndex1,
dataIndex1;
const audio1 = new Audio();
const player1 = document.getElementById('player_img');
const wplayer1 = document.getElementById('wplayer_img');
const player_prevbtn1 = document.getElementById('player_prevbtn');
const player_playbtn1 = document.getElementById('player_playbtn');
const player_nxtbtn1 = document.getElementById('player_nxtbtn');
const wplayer_prevbtn1 = document.getElementById('wplayer_prevbtn');
const wplayer_playbtn1 = document.getElementById('wplayer_playbtn');
const wplayer_nxtbtn1 = document.getElementById('wplayer_nxtbtn');
const music_details1 = document.querySelector('.sidebar_player .top h4');
const wmusic_details1 = document.querySelector('.wide_music_container h1');
const singer_name1 = document.querySelector('.wide_music_container h3');
const music_card_btn1 = Array.from(document.querySelectorAll('.grid_layout .grid_img button'));
const music_card_btn_play1 = document.querySelector('.grid_layout .grid_img button i')
const volumeInput1 = document.getElementById('volume');
const volumeIcon1 = document.getElementById('volume_icon');

player_playbtn1.addEventListener("click", () => {
    if (audio1.paused) {
        audio1.play();
        player_playbtn1.classList.remove("bx-play-circle");
        player_playbtn1.classList.add("bx-pause-circle");
    } else {
        audio1.pause();
        player_playbtn1.classList.add("bx-play-circle");
        player_playbtn1.classList.remove("bx-pause-circle");
        
    }
})

wplayer_playbtn1.addEventListener("click", () => {
    if (audio1.paused) {
        audio1.play();
        wplayer_playbtn1.classList.remove("bx-play-circle");
        player_playbtn1.classList.add("bx-pause-circle");
    } else {
        audio1.pause();
        wplayer_playbtn1.classList.add("bx-play-circle");
        player_playbtn1.classList.remove("bx-pause-circle"); 
    }
})

// console.log(music_card_btn);

async function fetch_data() {
    const data = await fetch("http://localhost/Muzic/fetch.php");
    const name = await data.json();
    console.log(name)
    music_card_btn1.forEach((elem, index) => {
        elem.addEventListener("click", (e) => {
            fetchIndex1 = name.length;
            classIndex1 = parseInt(e.target.id);
            const idName = document.getElementById(classIndex1);
            dataIndex1 = e.target = name[index].Song_name;
            singerIndex1 = e.target = name[index].Singer_name;
            songIndex1 = e.target = name[index].File_name;
            imgIndex1 = e.target = name[index].img_name;
            // console.log(songIndex);
            music_details1.innerText = dataIndex;
            wmusic_details1.innerText = dataIndex;
            singer_name1.innerText = singerIndex;
            player1.src = `Uploads/img/${imgIndex}`;
            wplayer1.src = `Uploads/img/${imgIndex}`;
            audio1.src = `Uploads/song/${songIndex}`;
            audio1.play();
            // idName.classList.remove("bx-play-circle");
            // idName.classList.add("bx-pause-circle");
            player_playbtn1.classList.remove("bx-play-circle");
            wplayer_playbtn1.classList.remove("bx-play-circle");
            player_playbtn1.classList.add("bx-pause-circle");
            wplayer_playbtn1.classList.add("bx-pause-circle");
        });
        
        
    })

    player_nxtbtn1.onclick = () => {
        main_index1++;
        if (main_index1 >= name.length) {
            main_index1 = 0;
        }
        nxt = name[main_index1].Song_name;
        nxt_file = name[main_index1].File_name;
        nxt_img = name[main_index1].img_name;
        
        music_details1.innerText = nxt;
        player1.src = `Uploads/img/${nxt_img}`;
        audio1.src = `Uploads/song/${nxt_file}`;
        wmusic_details1.innerText = nxt;
        wplayer1.src = `Uploads/img/${nxt_img}`;
        audio1.src = `Uploads/song/${nxt_file}`;
        audio1.play();
        
        player_playbtn1.classList.remove("bx-play-circle");
        player_playbtn1.classList.add("bx-pause-circle");
    };

    wplayer_nxtbtn1.onclick = () => {
        main_index1++;
        if (main_index1 >= name.length) {
            main_index1 = 0;
        }
        nxt = name[main_index1].Song_name;
        nxt_file = name[main_index1].File_name;
        nxt_img = name[main_index1].img_name;
        
        wmusic_details1.innerText = nxt;
        wplayer1.src = `Uploads/img/${nxt_img}`;
        audio1.src = `Uploads/song/${nxt_file}`;
        music_details1.innerText = nxt;
        player1.src = `Uploads/img/${nxt_img}`;
        audio1.src = `Uploads/song/${nxt_file}`;
        audio1.play();
        
        wplayer_playbtn1.classList.remove("bx-play-circle");
        wplayer_playbtn1.classList.add("bx-pause-circle");
    };
    
    player_prevbtn1.onclick = () => {
        if (main_index1 == 0) {
            main_index1 = name.length-1;
        }
        
        nxt = name[main_index1].Song_name;
        nxt_file = name[main_index1].File_name;
        nxt_img = name[main_index1].img_name;
        
        music_details1.innerText = nxt;
        player1.src = `Uploads/img/${nxt_img}`;
        audio1.src = `Uploads/song/${nxt_file}`;
        wmusic_details1.innerText = nxt;
        wplayer1.src = `Uploads/img/${nxt_img}`;
        audio1.src = `Uploads/song/${nxt_file}`;
        audio1.play();
        
        player_playbtn1.classList.remove("bx-play-circle");
        player_playbtn1.classList.add("bx-pause-circle");
        main_index1--;
    };

    wplayer_prevbtn1.onclick = () => {
        if (main_index == 0) {
            main_index1 = name.length-1;
        }
        
        nxt = name[main_index1].Song_name;
        nxt_file = name[main_index1].File_name;
        nxt_img = name[main_index1].img_name;
        
        wmusic_details1.innerText = nxt;
        wplayer1.src = `Uploads/img/${nxt_img}`;
        audio1.src = `Uploads/song/${nxt_file}`;
        music_details1.innerText = nxt;
        player1.src = `Uploads/img/${nxt_img}`;
        audio1.src = `Uploads/song/${nxt_file}`;
        audio1.play();
        
        wplayer_playbtn1.classList.remove("bx-play-circle");
        wplayer_playbtn1.classList.add("bx-pause-circle");
        main_index1--;
    };
}
volumeInput1.addEventListener('input', (event) => {
    const volumeValue1 = volumeInput1.value/100;
    // console.log(volumeValue);
    audio1.volume = volumeValue1;
    if(volumeValue1==0){
        volumeIcon1.classList.remove("bx-volume-full");
        volumeIcon1.classList.add("bx-volume-mute");
    }else if(volumeValue1<=0.3){
        volumeIcon1.classList.remove("bx-volume-mute");
        volumeIcon1.classList.add("bx-volume");
    }else if(volumeValue1<=0.6){
        volumeIcon1.classList.remove("bx-volume");
        volumeIcon1.classList.add("bx-volume-low");
    }else{
        volumeIcon1.classList.remove("bx-volume-low");
        volumeIcon1.classList.add("bx-volume-full");
    }
});

fetch_data();

let player_btn1 = document.getElementById('player_btn');
let wideplayer1 = document.getElementById('player');

player_btn1.onclick = () => {
    wideplayer1.classList.toggle('show');
}