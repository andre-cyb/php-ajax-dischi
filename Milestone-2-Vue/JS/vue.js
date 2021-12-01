
/* console.log("ciao");

const cardContainer = document.getElementById("songsCont");
axios.get("http://localhost/php-ajax-dischi-1/Milestone-2/Data/data.php").then((resp) => {
    const data = resp.data.response;

    data.forEach((song) => {
        const songCard = `<div class="col-2 text-center my_card">
                            <img src="${song.poster}" alt="" />
                            <h4 class="text-white m-0 pt-4 pb-4">${song.title}</h4>
                            <span>${song.author}</span>
                            <small>${song.year}</small>
                        </div>`;

        cardContainer.innerHTML += songCard;

    });
}); */

new Vue({
    el: "#root",
    data: {
        songs: [],
    },
    mounted() {
        axios.get("http://localhost/php-ajax-dischi-1/Milestone-2/Data/data.php").then((resp) => {
            this.songs = resp.data.response;
        });
    }
});

