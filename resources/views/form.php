<!-- <div v-if="formShow" style="padding: 10rem;font-size:1.1rem;">
  <h2>イベントフォーム</h2>
<EventTitle v-model="eventData.title"></EventTitle>

    <label for="maxNumber">最大人数</label>
  <input
  id="maxNumber"
  type="number"
  v-model.number="eventData.maxNumber"
  >
  <p>{{ typeof eventData.maxNumber }}</p>

      <label for="host">主催者</label>
  <input
  id="host"
  type="text"
  v-model.trim="eventData.host"
  >
  <pre>{{ eventData.host }}</pre>
  <label for="detail">イベントの内容</label>
<textarea id="detail" cols="50" rows="5" v-model="eventData.detail">
</textarea>
<p style="white-space:pre">  {{ eventData.detail }}</p>

<!-- 単体チェックボックス -->
<input 
type="checkbox"
id="isPrivate"
v-model="eventData.isPrivate"
>
<label for="isPrivate">非公開</label>
<p>{{ eventData.isPrivate }}</p>

<!-- 複数チェックボックス -->
<p>参加条件</p>
<input 
type="checkbox" 
id="10" 
value="10代"
v-model="eventData.target"
>
<label for="10">10代</label>

<input 
type="checkbox" 
id="20" 
value="20代"
v-model="eventData.target"
>
<label for="20">20代</label>

<input 
type="checkbox" 
id="30" 
value="30代"
v-model="eventData.target"
>
<label for="30">30代</label>
<p>{{ eventData.target }}</p>
<p>参加費</p>
<input 
type="radio"
 id="free"
  value="無料"
  v-model="eventData.price"
  >
<label for="free">無料</label>
<!-- ラジオボタン -->
<input
type="radio"
 id="paid"
  value="有料"
  v-model="eventData.price"
  >
<label for="paid">有料</label>
<p>{{ eventData.price }}</p>

<!-- セレクトボックス -->
<p>開催場所</p>
<select v-model="eventData.location" multiple>
  <option v-for="location in locations"
  :key="location"
  >{{ location }}</option>
</select>
<p>{{ eventData.location }}</p> -->