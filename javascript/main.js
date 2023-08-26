let image = document.getElementById('Image'),
song = document.getElementById('Music');

let imageTxt = document.getElementById('image_detail'),
songtxt = document.getElementById('song_detail');
console.log(image,song);

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

let songIndex = 0;
let music_card = Array.from(document.getElementsByClassName('grid_layout'));
let music_details = document.querySelector('.sidebar_player .top h4');
console.log(music_details);

async function fetch_data(){
    const data = await fetch("http://localhost/Muzic/fetch.php");
    const name = await data.json();
    name.forEach((element)=>{
        console.log(element.Song_name);
    })
    console.log(name)

    const music_array = [];
    for(let i in name){
        music_array.push([i,name[i]])
    }
    console.log(music_array);
    Array.from(document.querySelectorAll('.grid_layout i')).forEach((element)=>{
        element = onclick = (e) =>{
            songIndex = parseInt(e.target.id);
            console.log(songIndex);
            music_details.innerHTML = name[songIndex] = name.forEach((element)=>{
        console.log(element.Song_name);
    });
            // console.log(music_array[0].Song_name);
            
        }
        
    })
}

fetch_data();