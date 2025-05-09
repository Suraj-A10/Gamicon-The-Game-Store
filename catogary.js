const games = {
        anime: [
          { img: 'https://1000logos.net/wp-content/uploads/2020/09/Watch-Dogs-Logo.jpg', price: '₹4999' },
          { img: 'https://1000logos.net/wp-content/uploads/2021/09/Among-Us-Logo.jpg', price: '₹299' },
          { img: 'https://1000logos.net/wp-content/uploads/2017/06/Spiderman-Logo.jpg', price: '₹399' },
          { img: 'https://1000logos.net/wp-content/uploads/2020/09/Grand-Theft-Auto-V-logo.jpg', price: '₹199' }
        ],
        free: [
          { img: 'https://1000logos.net/wp-content/uploads/2024/02/Warzone-logo.jpg', price: 'Free' },
          { img: 'https://1000logos.net/wp-content/uploads/2018/01/CSGO-Logo.jpg', price: 'Free' },
          { img: 'https://1000logos.net/wp-content/uploads/2020/06/Fortnite-Logo-1.jpg', price: 'Free' },
          { img: 'https://1000logos.net/wp-content/uploads/2025/01/Mafia-Logo.jpg', price: 'Free' }
        ],
        casual: [
          { img: 'https://i.imgur.com/2XivgZx.jpg', price: '₹149' },
          { img: 'https://i.imgur.com/fbEoFW2.jpg', price: '₹99' },
          { img: 'https://i.imgur.com/LEzJRMQ.jpg', price: '₹249' },
          { img: 'https://i.imgur.com/dCqqLzm.jpg', price: '₹89' }
        ],
        openworld: [
          { img: 'https://i.imgur.com/OQ8RU2K.jpg', price: '₹699' },
          { img: 'https://i.imgur.com/WHDzCMz.jpg', price: '₹899' },
          { img: 'https://i.imgur.com/tHAbRBi.jpg', price: '₹749' },
          { img: 'https://i.imgur.com/hPvnJZN.jpg', price: '₹999' }
        ]
      };
    
      function showGames(category) {
        const container = document.getElementById('game-sections');
      
        // Check if already showing the same category
        if (container.getAttribute('data-category') === category) {
          container.innerHTML = '';
          container.removeAttribute('data-category'); // Reset the active category
          return;
        }
      
        // Show selected category games
        container.setAttribute('data-category', category);
        container.innerHTML = '';
      
        const row = document.createElement('div');
        row.className = 'row';
      
        games[category].forEach(game => {
          const col = document.createElement('div');
          col.className = 'col-md-3';
      
          col.innerHTML = `
            <div class="game-card">
              <img src="${game.img}" alt="Game">
              <p class="mt-2 text-center">Price: <strong>${game.price}</strong></p>
            </div>
          `;
      
          row.appendChild(col);
        });
      
        container.appendChild(row);
      }