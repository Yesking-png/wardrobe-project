<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Angel Project</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
      min-height: 100vh;
      padding: 20px;
      color: #2d3748;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
      color: #2d3748;
      font-size: 2.2rem;
      margin-bottom: 30px;
      font-weight: 600;
    }

    .card {
      background: white;
      border-radius: 12px;
      padding: 24px;
      margin-bottom: 24px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
      border: 1px solid #e2e8f0;
      transition: box-shadow 0.2s ease;
    }

    .card:hover {
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .card h2 {
      color: #4a5568;
      margin-bottom: 20px;
      font-size: 1.5rem;
      font-weight: 600;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: #4a5568;
      font-size: 0.9rem;
    }

    input, select {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #d1d5db;
      border-radius: 6px;
      font-size: 14px;
      transition: border-color 0.2s ease, box-shadow 0.2s ease;
      background: white;
    }

    input:focus, select:focus {
      outline: none;
      border-color: #6366f1;
      box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
    }

    .btn {
      background: #6366f1;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.2s ease, transform 0.1s ease;
    }

    .btn:hover {
      background: #5b21b6;
      transform: translateY(-1px);
    }

    .btn:active {
      transform: translateY(0);
    }

    .btn-secondary {
      background: #6b7280;
      margin-right: 8px;
    }

    .btn-secondary:hover {
      background: #4b5563;
    }

    .btn-danger {
      background: #dc2626;
      padding: 4px 8px;
      font-size: 12px;
      border-radius: 4px;
    }

    .btn-danger:hover {
      background: #b91c1c;
    }

    .category-section {
      margin-bottom: 20px;
      border-radius: 8px;
      overflow: hidden;
      border: 1px solid #e5e7eb;
      transition: all 0.2s ease;
    }

    .category-header {
      background: #f9fafb;
      padding: 16px;
      cursor: pointer;
      border-bottom: 1px solid #e5e7eb;
      transition: background-color 0.2s ease;
    }

    .category-header:hover {
      background: #f3f4f6;
    }

    .category-header h3 {
      margin: 0;
      font-size: 1.1rem;
      color: #374151;
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-weight: 500;
    }

    .category-icon {
      font-size: 1.2rem;
      transition: transform 0.2s ease;
    }

    .category-section.active .category-icon {
      transform: rotate(180deg);
    }

    .clothes-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 16px;
      padding: 0 16px;
      background: #fafafa;
      max-height: 0;
      overflow: hidden;
      transition: all 0.3s ease;
      opacity: 0;
    }

    .clothes-grid.active {
      max-height: 1000px;
      padding: 16px;
      opacity: 1;
    }

    .clothing-item {
      background: white;
      border-radius: 8px;
      padding: 12px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      transition: all 0.2s ease;
      position: relative;
      overflow: hidden;
    }

    .clothing-item:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .clothing-item img {
      width: 100%;
      height: 100px;
      object-fit: cover;
      border-radius: 6px;
      margin-bottom: 8px;
    }

    .clothing-item input {
      border: 1px solid #e2e8f0;
      padding: 6px 8px;
      margin-bottom: 8px;
      font-size: 13px;
    }

    .delete-btn {
      position: absolute;
      top: 8px;
      right: 8px;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
    }

    .suggestion-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 16px;
      margin-top: 16px;
    }

    .suggestion-item {
      background: #6366f1;
      color: white;
      padding: 16px;
      border-radius: 8px;
      text-align: center;
      box-shadow: 0 2px 8px rgba(99, 102, 241, 0.25);
      transition: all 0.2s ease;
    }

    .suggestion-item:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
    }

    .suggestion-item h4 {
      margin-bottom: 8px;
      font-size: 1rem;
      font-weight: 500;
    }

    .suggestion-item .category-badge {
      background: rgba(255,255,255,0.2);
      padding: 4px 8px;
      border-radius: 12px;
      font-size: 0.8rem;
      margin-top: 8px;
      display: inline-block;
    }

    .history-item {
      background: #f8fafc;
      padding: 12px;
      border-radius: 6px;
      margin-bottom: 8px;
      border-left: 3px solid #6366f1;
      transition: all 0.2s ease;
    }

    .history-item:hover {
      background: #f1f5f9;
      transform: translateX(2px);
    }

    .history-meta {
      font-size: 0.85rem;
      color: #6b7280;
      margin-bottom: 4px;
    }

    .history-outfit {
      font-weight: 500;
      color: #374151;
      font-size: 0.9rem;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
      gap: 12px;
      margin-bottom: 16px;
    }

    .stat-card {
      background: #6366f1;
      color: white;
      padding: 16px;
      border-radius: 8px;
      text-align: center;
      transition: transform 0.2s ease;
    }

    .stat-card:hover {
      transform: translateY(-2px);
    }

    .stat-number {
      font-size: 1.5rem;
      font-weight: 600;
      display: block;
    }

    .stat-label {
      font-size: 0.8rem;
      opacity: 0.9;
      font-weight: 400;
    }

    .weather-icons {
      display: flex;
      gap: 8px;
      align-items: center;
      margin-top: 8px;
    }

    .weather-icon {
      font-size: 1.2rem;
      padding: 8px;
      border-radius: 6px;
      background: #f3f4f6;
      cursor: pointer;
      transition: all 0.2s ease;
      border: 2px solid transparent;
    }

    .weather-icon:hover, .weather-icon.active {
      background: #6366f1;
      color: white;
      border-color: #6366f1;
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    @media (max-width: 768px) {
      .form-row {
        grid-template-columns: 1fr;
      }
      
      .clothes-grid {
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
      }
      
      h1 {
        font-size: 1.8rem;
      }
    }

    .loading {
      display: inline-block;
      width: 16px;
      height: 16px;
      border: 2px solid #ffffff;
      border-radius: 50%;
      border-top-color: transparent;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    /* Subtle animations for better UX */
    .card {
      animation: fadeIn 0.3s ease-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1> Version.066A </h1>

    <!-- Stats Dashboard -->
    <div class="card">
      <h2>📊 Your Wardrobe Stats</h2>
      <div class="stats-grid" id="stats-grid">
        <!-- Stats will be populated here -->
      </div>
    </div>

    <!-- Add Clothes Form -->
    <div class="card">
      <h2>➕ Add New Item</h2>
      <form id="add-clothes-form">
        <div class="form-row">
          <div class="form-group">
            <label for="clothing-name">Item Name</label>
            <input type="text" id="clothing-name" placeholder="e.g., Blue Denim Jacket" required>
          </div>
          <div class="form-group">
            <label for="category">Category</label>
            <select id="category">
              <option value="Top">👔 Top</option>
              <option value="Bottom">👖 Bottom</option>
              <option value="Dress">👗 Dress</option>
              <option value="Outerwear">🧥 Outerwear</option>
              <option value="Footwear">👟 Footwear</option>
              <option value="Accessory">👜 Accessory</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="image">Add Photo (Optional)</label>
          <input type="file" id="image" accept="image/*">
        </div>
        <button type="submit" class="btn">Add to Wardrobe</button>
      </form>
    </div>

    <!-- Wardrobe Display -->
    <div class="card">
      <h2>👚 Your Wardrobe</h2>
      <div style="margin-bottom: 20px;">
        <button onclick="exportWardrobeWithImages()" class="btn">📤 Export Complete Wardrobe</button>
        <button onclick="exportWardrobe()" class="btn btn-secondary">📤 Export Data Only</button>
        <input type="file" id="import-file" accept="application/json" style="display: none;">
        <button onclick="document.getElementById('import-file').click()" class="btn btn-secondary">📥 Import</button>
      </div>
      <div id="clothes-display"></div>
    </div>

    <!-- Outfit Suggestion -->
    <div class="card">
      <h2>✨ Get Outfit Suggestion</h2>
      <form id="suggestion-form">
        <div class="form-row">
          <div class="form-group">
            <label for="day">Day/Date</label>
            <input type="text" id="day" placeholder="e.g., Monday, Dec 25" required>
          </div>
          <div class="form-group">
            <label for="event">Event/Occasion</label>
            <input type="text" id="event" placeholder="e.g., work meeting, date night" required>
          </div>
        </div>
        <div class="form-group">
          <label>Weather</label>
          <div class="weather-icons">
            <div class="weather-icon" data-weather="Sunny">☀️</div>
            <div class="weather-icon" data-weather="Rainy">🌧️</div>
            <div class="weather-icon" data-weather="Cold">❄️</div>
            <div class="weather-icon" data-weather="Hot">🔥</div>
          </div>
          <select id="weather" style="display: none;">
            <option value="Sunny">Sunny</option>
            <option value="Rainy">Rainy</option>
            <option value="Cold">Cold</option>
            <option value="Hot">Hot</option>
          </select>
        </div>
        <button type="submit" class="btn">Get Suggestions</button>
      </form>
    </div>

    <!-- Suggested Outfit -->
    <div class="card">
      <h2>💡 Suggested Outfit</h2>
      <div id="suggestion-output"></div>
    </div>

    <!-- Outfit History -->
    <div class="card">
      <h2>📝 Outfit History</h2>
      <div id="history-log"></div>
    </div>
  </div>

  <script>
    let clothes = [];
    let history = [];
    let selectedWeather = 'Sunny';

    // Enhanced outfit suggestion algorithm
    const outfitRules = {
      'Cold': {
        required: ['Outerwear', 'Top'],
        optional: ['Bottom', 'Footwear', 'Accessory'],
        avoid: []
      },
      'Hot': {
        required: ['Top'],
        optional: ['Bottom', 'Dress', 'Footwear', 'Accessory'],
        avoid: ['Outerwear']
      },
      'Rainy': {
        required: ['Outerwear', 'Top'],
        optional: ['Bottom', 'Footwear'],
        avoid: ['Dress']
      },
      'Sunny': {
        required: ['Top'],
        optional: ['Bottom', 'Dress', 'Footwear', 'Accessory'],
        avoid: []
      }
    };

    const eventKeywords = {
      formal: ['formal', 'wedding', 'interview', 'business', 'meeting', 'dinner', 'party'],
      casual: ['casual', 'weekend', 'shopping', 'home', 'relax', 'coffee'],
      sport: ['sport', 'gym', 'exercise', 'running', 'workout', 'yoga'],
      work: ['work', 'office', 'professional', 'conference']
    };

    function updateStats() {
      const statsGrid = document.getElementById('stats-grid');
      const totalItems = clothes.length;
      const categories = [...new Set(clothes.map(item => item.category))];
      const totalOutfits = history.length;
      const favoriteCategory = clothes.length > 0 ? 
        clothes.reduce((acc, item) => {
          acc[item.category] = (acc[item.category] || 0) + 1;
          return acc;
        }, {}) : {};
      
      const mostUsed = Object.keys(favoriteCategory).reduce((a, b) => 
        favoriteCategory[a] > favoriteCategory[b] ? a : b, 'None');

      statsGrid.innerHTML = `
        <div class="stat-card">
          <span class="stat-number">${totalItems}</span>
          <span class="stat-label">Total Items</span>
        </div>
        <div class="stat-card">
          <span class="stat-number">${categories.length}</span>
          <span class="stat-label">Categories</span>
        </div>
        <div class="stat-card">
          <span class="stat-number">${totalOutfits}</span>
          <span class="stat-label">Outfits Created</span>
        </div>
        <div class="stat-card">
          <span class="stat-number">${mostUsed}</span>
          <span class="stat-label">Top Category</span>
        </div>
      `;
    }

    function displayClothes() {
      const display = document.getElementById('clothes-display');
      display.innerHTML = '';
      const categories = ['Top', 'Bottom', 'Dress', 'Outerwear', 'Footwear', 'Accessory'];

      categories.forEach(cat => {
        const categoryItems = clothes.filter(c => c.category === cat);
        if (categoryItems.length === 0) return;

        const section = document.createElement('div');
        section.className = 'category-section';

        const header = document.createElement('div');
        header.className = 'category-header';
        
        const title = document.createElement('h3');
        const icons = {
          'Top': '👔',
          'Bottom': '👖', 
          'Dress': '👗',
          'Outerwear': '🧥',
          'Footwear': '👟',
          'Accessory': '👜'
        };
        
        title.innerHTML = `
          ${icons[cat]} ${cat} (${categoryItems.length})
          <span class="category-icon">▼</span>
        `;
        
        header.appendChild(title);
        header.addEventListener('click', () => {
          section.classList.toggle('active');
          grid.classList.toggle('active');
        });

        const grid = document.createElement('div');
        grid.className = 'clothes-grid';

        categoryItems.forEach(item => {
          const itemDiv = document.createElement('div');
          itemDiv.className = 'clothing-item';

          const nameField = document.createElement('input');
          nameField.type = 'text';
          nameField.value = item.name;
          nameField.addEventListener('change', () => {
            item.name = nameField.value;
            updateStats();
          });

          const deleteBtn = document.createElement('button');
          deleteBtn.className = 'btn btn-danger delete-btn';
          deleteBtn.innerHTML = '×';
          deleteBtn.addEventListener('click', () => {
            clothes = clothes.filter(c => c !== item);
            displayClothes();
            updateStats();
          });

          itemDiv.appendChild(nameField);
          
          if (item.imageData) {
            const img = document.createElement('img');
            img.src = item.imageData;
            img.alt = item.name;
            itemDiv.appendChild(img);
          }
          
          itemDiv.appendChild(deleteBtn);
          grid.appendChild(itemDiv);
        });

        section.appendChild(header);
        section.appendChild(grid);
        display.appendChild(section);
      });
    }

    function displayHistory() {
      const log = document.getElementById('history-log');
      log.innerHTML = '';
      
      if (history.length === 0) {
        log.innerHTML = '<p style="text-align: center; color: #6b7280;">No outfit history yet. Create your first outfit suggestion!</p>';
        return;
      }

      history.slice().reverse().forEach((entry, index) => {
        const div = document.createElement('div');
        div.className = 'history-item';
        
        div.innerHTML = `
          <div class="history-meta">
            📅 ${entry.day} • 🌤️ ${entry.weather} • 🎯 ${entry.event}
          </div>
          <div class="history-outfit">
            ${entry.outfit.map(item => `${item.name} (${item.category})`).join(', ')}
          </div>
        `;
        
        log.appendChild(div);
      });
    }

    function getEventType(eventText) {
      const text = eventText.toLowerCase();
      for (const [type, keywords] of Object.entries(eventKeywords)) {
        if (keywords.some(keyword => text.includes(keyword))) {
          return type;
        }
      }
      return 'casual';
    }

    function generateOutfitSuggestion(weather, eventType) {
      const rules = outfitRules[weather];
      let availableItems = clothes.filter(item => !rules.avoid.includes(item.category));
      
      // Filter by event type
      if (eventType === 'formal') {
        availableItems = availableItems.filter(item => 
          ['Dress', 'Top', 'Bottom', 'Footwear', 'Outerwear'].includes(item.category)
        );
      } else if (eventType === 'sport') {
        availableItems = availableItems.filter(item => 
          ['Top', 'Bottom', 'Footwear'].includes(item.category)
        );
      }

      const outfit = [];
      
      // Add required items
      rules.required.forEach(category => {
        const items = availableItems.filter(item => item.category === category);
        if (items.length > 0) {
          outfit.push(items[Math.floor(Math.random() * items.length)]);
        }
      });

      // Add optional items (max 3 more)
      const remaining = rules.optional.filter(cat => 
        !outfit.some(item => item.category === cat)
      );
      
      for (let i = 0; i < Math.min(3, remaining.length); i++) {
        const category = remaining[i];
        const items = availableItems.filter(item => 
          item.category === category && !outfit.includes(item)
        );
        if (items.length > 0) {
          outfit.push(items[Math.floor(Math.random() * items.length)]);
        }
      }

      return outfit;
    }

    // Event listeners
    document.getElementById('add-clothes-form').addEventListener('submit', function(e) {
      e.preventDefault();
      const name = document.getElementById('clothing-name').value.trim();
      const category = document.getElementById('category').value;
      const fileInput = document.getElementById('image');
      const file = fileInput.files[0];

      if (!name) return;

      const submitBtn = this.querySelector('button[type="submit"]');
      submitBtn.innerHTML = '<span class="loading"></span> Adding...';
      submitBtn.disabled = true;

      const reader = new FileReader();
      reader.onloadend = () => {
        const imageData = file ? reader.result : null;
        clothes.push({ name, category, imageData });
        displayClothes();
        updateStats();
        
        // Reset form
        document.getElementById('clothing-name').value = '';
        fileInput.value = '';
        
        // Reset button
        submitBtn.innerHTML = 'Add to Wardrobe';
        submitBtn.disabled = false;
      };
      
      if (file) {
        reader.readAsDataURL(file);
      } else {
        reader.onloadend();
      }
    });

    // Weather icon selection
    document.querySelectorAll('.weather-icon').forEach(icon => {
      icon.addEventListener('click', () => {
        document.querySelectorAll('.weather-icon').forEach(i => i.classList.remove('active'));
        icon.classList.add('active');
        selectedWeather = icon.dataset.weather;
        document.getElementById('weather').value = selectedWeather;
      });
    });

    // Initialize first weather option
    document.querySelector('.weather-icon').classList.add('active');

    document.getElementById('suggestion-form').addEventListener('submit', function(e) {
      e.preventDefault();
      const day = document.getElementById('day').value.trim();
      const event = document.getElementById('event').value.trim();
      const weather = selectedWeather;

      if (!day || !event) return;

      const submitBtn = this.querySelector('button[type="submit"]');
      submitBtn.innerHTML = '<span class="loading"></span> Generating...';
      submitBtn.disabled = true;

      // Simulate processing delay for better UX
      setTimeout(() => {
        const eventType = getEventType(event);
        const outfit = generateOutfitSuggestion(weather, eventType);

        const output = document.getElementById('suggestion-output');
        output.innerHTML = '';

        if (outfit.length === 0) {
          output.innerHTML = '<p style="text-align: center; color: #6b7280;">No suitable items found for this occasion. Try adding more clothes to your wardrobe!</p>';
        } else {
          const grid = document.createElement('div');
          grid.className = 'suggestion-grid';

          outfit.forEach((item, index) => {
            const div = document.createElement('div');
            div.className = 'suggestion-item';
            
            div.innerHTML = `
              <h4>${item.name}</h4>
              <div class="category-badge">${item.category}</div>
            `;
            
            grid.appendChild(div);
          });

          output.appendChild(grid);

          // Add to history
          history.push({ day, event, weather, outfit });
          displayHistory();
        }

        // Reset button
        submitBtn.innerHTML = 'Get Suggestions';
        submitBtn.disabled = false;
      }, 800);
    });

    // Import file change listener
    document.getElementById('import-file').addEventListener('change', function() {
      const file = this.files[0];
      if (!file) return;

      const reader = new FileReader();
      reader.onload = () => {
        try {
          const importedData = JSON.parse(reader.result);
          
          // Check if it's the new format with version info
          if (importedData.version && importedData.clothes) {
            clothes = importedData.clothes;
            if (importedData.history) {
              history = importedData.history;
            }
            alert(`✅ Complete wardrobe imported successfully!\n📅 Export Date: ${new Date(importedData.exportDate).toLocaleDateString()}\n👕 Items: ${importedData.clothes.length}\n📝 History: ${importedData.history ? importedData.history.length : 0} outfits`);
          } else {
            // Legacy format - just clothes array
            clothes = Array.isArray(importedData) ? importedData : [];
            alert('✅ Wardrobe imported successfully! (Legacy format)');
          }
          
          displayClothes();
          displayHistory();
          updateStats();
        } catch (e) {
          alert('❌ Invalid file format. Please select a valid JSON backup file.');
        }
      };
      reader.readAsText(file);
    });

    function exportWardrobe() {
      // Create a comprehensive export with all data
      const exportData = {
        clothes: clothes,
        history: history,
        exportDate: new Date().toISOString(),
        version: "1.0"
      };
      
      const data = JSON.stringify(exportData, null, 2);
      const blob = new Blob([data], { type: 'application/json' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = `wardrobe-backup-${new Date().toISOString().split('T')[0]}.json`;
      a.click();
      URL.revokeObjectURL(url);
    }

    function exportWardrobeWithImages() {
      // Create a ZIP file with JSON data and images
      const exportData = {
        clothes: clothes.map(item => ({
          ...item,
          imageFileName: item.imageData ? `${item.name.replace(/[^a-zA-Z0-9]/g, '_')}_${Date.now()}.jpg` : null
        })),
        history: history,
        exportDate: new Date().toISOString(),
        version: "1.0"
      };
      
      // For now, export as JSON with embedded images (base64)
      // This maintains full compatibility and includes all image data
      const data = JSON.stringify(exportData, null, 2);
      const blob = new Blob([data], { type: 'application/json' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = `wardrobe-complete-${new Date().toISOString().split('T')[0]}.json`;
      a.click();
      URL.revokeObjectURL(url);
    }

    // Initialize app
    window.addEventListener('load', function() {
      displayClothes();
      displayHistory();
      updateStats();
    });
  </script>
</body>
</html>