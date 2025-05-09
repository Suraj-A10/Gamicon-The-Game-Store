document.addEventListener("DOMContentLoaded", function () {
    const games = [
      { name: "Call of Duty", url: "callofduty.html" },
      { name: "Minecraft", url: "minecraft.html" },
      { name: "Fortnite", url: "fortnite.html" },
      { name: "FIFA 23", url: "fifa23.html" },
      { name: "Valorant", url: "valorant.html" },
      { name: "Need for Speed", url: "nfs.html" },
      { name: "GTA V", url: "GTA V.html" }

    ];
  
    const input = document.getElementById("searchInput");
    const suggestionList = document.getElementById("suggestionList");
  
    input.addEventListener("input", function () {
      const query = input.value.toLowerCase();
      suggestionList.innerHTML = "";
  
      if (query.length === 0) {
        suggestionList.style.display = "none";
        return;
      }
  
      const filteredGames = games.filter(game =>
        game.name.toLowerCase().includes(query)
      );
  
      if (filteredGames.length === 0) {
        suggestionList.style.display = "none";
        return;
      }
  
      filteredGames.forEach(game => {
        const li = document.createElement("li");
        li.textContent = game.name;
        li.addEventListener("click", () => {
          window.location.href = game.url; // ✅ Redirect to game page
        });
        suggestionList.appendChild(li);
      });
  
      suggestionList.style.display = "block";
    });
  
    document.addEventListener("click", function (e) {
      if (!e.target.closest(".search-box")) {
        suggestionList.style.display = "none";
      }
    });
  });