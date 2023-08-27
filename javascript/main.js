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
let audio = new Audio();
let player = document.getElementById('player_img');
let player_prevbtn = document.getElementById('player_prevbtn');
let player_playbtn = document.getElementById('player_playbtn');
let player_nxtbtn = document.getElementById('player_nxtbtn');
let music_details = document.querySelector('.sidebar_player .top h4');
let music_card_btn = Array.from(document.querySelectorAll('.grid_layout .grid_img'));
let music_card_btn_icon = document.getElementById('cardplay_icon');

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

    })
}

fetch_data();