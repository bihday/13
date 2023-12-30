<!DOCTYPE html>
<html>
  <head>
    <title>Bihday</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="preload" as="style" type="text/css" href="style.css" crossorigin>
    <link rel="prefetch" href="detective.gif">
    <link rel="prefetch" href="Pinocchio.gif">
    <link rel="prefetch" href="troll.png">
    <link rel="prefetch" href="13.jpg">
    <link rel="icon" href="13.jpg" type="image/x-icon">
  </head>
  <body>
    <form id="finish" method="post" action="finish.php">
      <input type="text" id="time" name="time">
      <input type="text" id="log" name="log">
    </form>
    <button id="reset">Reset all progress</button>
    <p><b>Time spent: <span id="t" class="big"></span></b></p>
    <div id="t1">
      <h1>Welcome!</h1>
      <p>You will have some tasks to solve.</p>
      <p>The first is this: tap the <b>Click</b> button. Good luck!</p>
      <p>By the way, there's only one button at any given time. Take a screenshot to see for yourself :)</p>
      <p><b>Also, don't worry, all information is automatically saved!</b></p>
      <button id="start">Start</button>
      <button id="click" id>Click</button>
    </div>
    <div id="t2">
      <h1>GOOD JOB! Now to task two.</h1>
      <p>Solve the riddle.</p>
      <img src="detective.gif">
      <pre>I am a song.<br>The year I was released in is a prime number.<br>The fourth character in my name is a space.<br>The word "the" appears 82 times in my lyrics.<br>What am I?</pre>
      <input type="text" id="ipt2" placeholder="Never Gonna Give You Up">
      <button id="btn2">Submit</button>
      <p id="wrong2"></p><br>
      <p><b>Note: capitalization is ignored.</b></p>
    </div>
    <div id="t3">
      <h1>Good job, detective!</h1>
      <p>Now, use the keyboard below to type "osushosgvuv". Nobody said it'll be easy :)</p>
      <pre id="typed"></pre><br>
      <button id="resetType">Reset</button>
      <div class="half"><p id="keyboard"></p></div>
      <button id="sub3">Submit</button>
      <p id="wrong3"></p>
    </div>
    <div id="t4">
      <h1>Good job again!</h1>
      <p>Let's play rock paper scissors. Best of 9! Win and you advance to task 5, lose and you repeat task 3.</p>
      <p>Tap the emoji near "You" to change your move!</p>
      <div class="half big">
        <p><span class="l">Me <span id="meEmoji">🤜</span></span><span class="r"><span id="meRPS"></span> <span id="youRPS"></span><span id="youEmoji">🤛</span> You</span></p><br>
        <p><span id="mePoints" class="l">0</span><span id="youPoints" class="r">0</span></p>
      </div><br>
      <p id="won"></p>
      <button id="RPSshoot">Rock, paper, scissors, SHOOT!</button>
      <p></p>
      <p><b>Note: Don't try to cheat by refreshing :)</b></p>
    </div>
    <div id="t5">
      <h1>Save Pinocchio from the deadly click button!</h1>
      <p>Objective: survive for 10 seconds. Broken hitbox, you're welcome!</p>
      <div id="pinocchio"><img src="Pinocchio.gif" id="pino">&lt;- This is Pinocchio</div>
      <button id="clickAttacker">Click</button>
      <div class="half middle" id="wasd">
        <button id="w">^</button><br>
        <button id="a">&lt;</button><button id="s">v</button><button id="d">&gt;</button>
      </div>
      <br><br><br><br><br><br><br><br>
      <div id="t5done"><br><br>
        <p>WELL DONE! You survived for 10 seconds!</p>
        <button id="t5yeay">YEAY!</button>
      </div>
    </div>
    <div id="t6">
      <p>Yeay, you saved Pinocchio!</p>
      <p>He gives you a piece of advice: <b>be honest</b>.</p>
      <h1>So, let's test your honesty!</h1>
      <p>Complete <a href="Really Good Crossword Puzzle!.puz" download>this puzzle</a>.</p>
      <p>Instructions:</p>
      <ul>
        <li>Download the puzzle (click <b>this puzzle</b>)</li>
        <li>In a file browser, go to downloads and find the file <b>Really Good Crossword Puzzle!.puz</b>.</li>
        <li>Open it with Alphacross <b>Crossword Importer</b>, and you're done!</li>
      </ul>
      <p>To tempt you to being dishonest, here's a button you can tap right now: <button id="t6done"><a href="Rick Astley - Never Gonna Give You Up (Official Music Video).mp4" target="_blank" class="nota">Click when you've finished doing the crossword</a></button></p>
      <h1>HINTS</h1>
      <p>Across</p>
      <div id="Ahints"></div>
      <p>Down</p>
      <div id="Dhints"></div>
    </div>
    <div id="t7">
      <p>Hope you enjoyed the video!</p>
      <p>Now, as a final task, choose one of the previous tasks you've solved. Tasks 2 and 6 are omitted for obvious reasons!</p>
      <select id="task">
        <option id="r1">Task 1 (Click button)</option>
        <option id="r3">Task 3 (Type osushosgvuv)</option>
        <option id="r4">Task 4 (Rock paper scissors)</option>
        <option id="r5">Task 5 (Save Pinocchio)</option>
      </select>
      <button id="repeat">Go!</button>
      <p><b>NOTE: If you choose task 4 and lose, you go back to the very beginning. Not recommended, but you're free to choose!</b></p>
    </div>
    <footer>
      <p>I worked on this at Nov 7, 8, 9, 10, 11, 12, 14, 16, 17, 18, 22, 24, 25, 26, 27, 28 2022</p>
    </footer>
    <script>
      const wrongs = ["Wrong!", "False!", "Incorrect!", "Untrue!", "❌", "❎", "Try again!", '" " "Correct!" " "'];
      //const tick ="`";
      const width = window.innerWidth;
      const height = window.innerHeight;
      const alph = "abcdefghijklmnopqrstuvwxyz".split``;
      const $ = q => document.querySelector(q);
      const ran = max => Math.floor(Math.random() * (max+1));
      var crazy = "";
      var t1 = 0;
      const view = (q, visible) => $(`#${q}`).style.display = visible ? " block" : "none";
      function addLog(log){
        localStorage.setItem("log", localStorage.getItem("log") + log + "|");
      }
      function finish(){
        addLog(`Mary finished task ${localStorage.getItem("cp") == 1? 4 : localStorage.getItem("cp")} in ${timify((localStorage.getItem("t")-localStorage.getItem("cpt"))/100)}!`);
        addLog(`|Mary finished this at ${Date()}, YEAY!`);
        localStorage.setItem("redo", 0);
        $("#time").value = timify(+localStorage.getItem("t")/100);
        $("#log").value = localStorage.getItem("log");
        document.forms["finish"].submit();
      }
      function click(q, func){
        $(`#${q}`).addEventListener('click',func);
      }
      function timify(t){
        let time = "";
        if (t >= 3600){
          let h = Math.floor(t/3600);
          time += `${h} hour${h>1 ?"hours":""} `;
        }
        if (t%3600 >= 60){
          let m = Math.floor((t%3600)/60);
          time += `${m} min${m>1?"s":""} `;
        }
        if (t%60 >= 1){
          let s = Math.floor((t%60))
          time += `${s} second${s>1?"s":""} `;
        }
        let f = time.split``;
        f.pop();
        return f.join``;
      }
      function next(n){
        //console.log(n);
        if (localStorage.getItem("redo") == 1){
          finish();
          return;
        }
        view('t'+(n-1), 0);
        view('t'+n, 1);
        localStorage.setItem("cp", n);
        let t = timify(localStorage.getItem("t"));
        let cpt = (localStorage.getItem("t")-localStorage.getItem("cpt"))/100;
        localStorage.setItem("cpt", localStorage.getItem("t"));
        addLog(`Mary finished task ${+n-1} in ${timify(cpt)}!`);
      }
      function unclick(q, fun, func){
        click(q, fun);
        document.body.addEventListener('mouseup', func);
      }
      function rList(li){
        var l = [];
        var r = [];
        for (c of li){l.push(c);}
        while (l.length){
          r.push(l.splice(ran(l.length-1), 1)[0]);
        }
        return r;
      }
      let r = rList(alph);
      let r2 = rList(alph);
      for (l in r){
        $("#keyboard").innerHTML += `<button onclick="$('#typed').innerHTML += '${r[l]}'">${r2[l]}</button>${((l==9)||(l==18))?"<br>":""}`;
      }
      const rCol = () => `#${ran(255).toString(16)}${ran(255).toString(16)}${ran(255).toString(16)}`;
      click("start", function(){
        view("start", 0);
        view("click", 1);
        crazy = setInterval(function(){
          $("#click").style.top = `${ran(height)}px`;
          $("#click").style.left = `${ran(width)}px`;
          $("#click").style.transform = `scale(${ran(9)+1}, ${ran(9)+1}) rotate(${ran(359)}deg)`;
          $("#click").style.color = rCol();
          $("#click").style.backgroundColor = rCol();
          //console.log(ran(1000));
        }, 10);
      });
      click("click", function(){
        clearInterval(crazy);
        alert("YOU DID IT!");
        next(2);
      });
      if (!localStorage.getItem("cp")) localStorage.setItem("cp", 1);
      //localStorage.setItem("redo", 0);
      //localStorage.setItem("cp", 6);
      view(`t${localStorage.getItem("cp")}`, 1);
      if (!localStorage.getItem("cpt")) localStorage.setItem("cpt", 0);
      if (!localStorage.getItem("redo")) localStorage.setItem("redo", 0);
      switch(+localStorage.getItem("cp")){
        case 5:
          t1 = localStorage.getItem("t");
          attackPinocchio();
          break;
      }
      if (!localStorage.getItem("t")) localStorage.setItem("t", 0);
      
      if (!localStorage.getItem("log")) localStorage.setItem("log", `|Mary visited this website at ${Date()}|`);
      setInterval(function(){
        localStorage.setItem("t", +localStorage.getItem("t") + 2);
        $("#t").innerHTML = timify(+localStorage.getItem("t")/100);
      }, 20);
      $("#t").innerHTML = localStorage.getItem("t")/100;
      click("reset", function(){
        if (confirm("Are you sure you want to reset all progress?")){
          localStorage.setItem("t", 0);
          localStorage.setItem("cp", 1);
          localStorage.setItem("cpt", 0);
          localStorage.setItem("log", "");
          window.location.reload();
        }
      });
      click("btn2", function(){
        if ($("#ipt2").value.toLowerCase() == "i'm the one"){
          alert("GOOD JOB!");
          next(3);
        }else{
          $("#wrong2").innerHTML = wrongs[ran(7)];
        }
      });
      click("resetType", function(){
        $("#typed").innerHTML = "";
      });
      click("sub3", function(){
        if($("#typed").innerHTML == "osushosgvuv"){
          alert("NICE!");
          next(4);
          localStorage.setItem("cp", 3);
        }else{
          $("#wrong3").innerHTML = wrongs[ran(7)];
        }
      });
      var yM = 0;
      var mM = 0;
      var yP = 0;
      var mP = 0;
      var turns = 0;
      var alive = true;
      const yMs = ["🤛", "<span class='you'>🖐️</span>", "<span class='you'>✌️</span>"];
      const mMs = ["🤜", "<span class='me'>🖐️</span>", "<span class='me'>✌️</span>"];
      click("youEmoji", function(){
        yM == 2 ? yM = 0 : yM++;
        $("#youEmoji").innerHTML = yMs[yM];
      });
      click("RPSshoot", function(){
        mM = ran(2);
        $("#meEmoji").innerHTML = mMs[mM];
        if (mM == yM + 1 || mM == yM - 2){
          mP++;
          $("#won").innerHTML = "Yeay, I won!";
          turns++;
        }else if(yM == mM + 1 || yM == mM - 2){
          yP++;
          $("#won").innerHTML = "Yeay, you won!";
          turns++;
        }else{
          $("#won").innerHTML = "Yeay, nobody won!"
        }
        $("#mePoints").innerHTML = mP;
        $("#youPoints").innerHTML = yP;
        if (turns == 9 || mP == 5 || yP == 5){
          view("RPSshoot", 0);
          if (mP > yP){
            $("#won").innerHTML = (localStorage.getItem("redo") == 1 ? "Repeat the whole thing... I warned you 😭😭😭" : "Repeat task 3 :)");
            if (localStorage.getItem("redo") == 1){
              localStorage.setItem("cp", 1);
              localStorage.setItem("redo", 0);
              addLog("Mary lost in Rock Paper Scissors and had to redo everything.");
            }
            setTimeout(function(){window.location.reload()}, 5000);
          }else{
            $("#won").innerHTML = `CONGRATULATIONS, luck's on your side! ${(localStorage.getItem("redo") == 1 ? "You risked repeating the whole thing, but that was brave of you. SALUTE!" : "Go do task 5 now!")}<br><button id='win'>Okay!</button>`;
          }
          click("win", function(){
            next(5);
            t1 = +$("#t").innerHTML*100;
            attackPinocchio();
          });
        }
     0 });
      function attackPinocchio(){
        //console.log("Called", performance.now());
        if (localStorage.getItem("t") - t1 >= 1000){
          console.log("10 secs");
          view("t5done", 1);
          return;
        }
        randNum = ran(500);
        x = ran(20) - 10;
        y = ran(20) - 10;
        $("#clickAttacker").style.color = rCol();
      $("#clickAttacker").style.backgroundColor = rCol();
        crazy = setInterval(function(){
          //console.log("crazy running");
          if ((wasdAttacker[0] > -10 && y < 0) || (wasdAttacker[0] < 200 && y > 0)) wasdAttacker[0] += y;
          if ((wasdAttacker[1] > -10 && x < 0) || (wasdAttacker[1] < 200 && x > 0)) wasdAttacker[1] += x;
          $("#clickAttacker").style.top = `${wasdAttacker[0]}px`;
          $("#clickAttacker").style.left = `${wasdAttacker[1]}px`;
          if (Math.abs(wasd[0]-wasdAttacker[0]) < 16.5 && Math.abs(wasd[1] - wasdAttacker[1] - 15) < 15){
            clearInterval(crazy);
            alive = false;
            $("#clickAttacker").innerHTML = "Pinocchio died :(";
              setTimeout(function(){
           $("#clickAttacker").innerHTML = "Click";
              $("#clickAttacker").style.top = "0px";
              $("#clickAttacker").style.left = "0px";
              $("#pinocchio").style.top = "100px";
              wasd[0] = 100;
              wasd[1] = 100;
              wasdAttacker[0] = 0;
              wasdAttacker[1] = 0;
              $("#pinocchio").style.left = "100px";
              alive = true;
              t1 = localStorage.getItem("t");
              console.log("Revived");
              console.log(wasdAttacker);
              attackPinocchio();
              }, 1000);
            
          }
        }, 2);
        setTimeout(function(){
          clearInterval(crazy);
          if (alive){
            attackPinocchio();
            console.log(randNum);
          }
        }, randNum);
      }
      var wasd = [100, 100]; // Vert ..hor
      var wasdAttacker = [0, 0];
      var randNum = 0;
      var move = 0;
      unclick("w", function(){
        move = setInterval(function(){if (wasd[0] > -10) $("#pinocchio").style.top = `${--wasd[0]}px`;}, 10);
      }, function(){
        clearInterval(move);
      });
      click("a", function(){
        move = setInterval(function(){if (wasd[1] > -10) $("#pinocchio").style.left = `${--wasd[1]}px`;}, 10);
      }, function(){
        clearInterval(move);
      });
      click("s", function(){
        move = setInterval(function(){if (wasd[0] < 200) $("#pinocchio").style.top = `${++wasd[0]}px`;}, 10);
      }, function(){
        clearInterval(move);
      });
      click("d", function(){
        move = setInterval(function(){if (wasd[1] < 200) $("#pinocchio").style.left = `${++wasd[1]}px`;}, 10);
      }, function(){
        clearInterval(move);
      });
      click("t5yeay", function(){
        next(6);
        view("t5done", 0);
      });
      const Ahints = [[1, "The country is in either Europe or Africa. Not many options there."], [5, "The movie's name begins with a C."], [7, " See Detara's video about it."], [9, "Just visit his most popular video :)"], [11, "Hmmm... what company has 2 letters in its name and is really good?"], [13, "This should be obvious: Di mana saja aku berada."], [15, "What's the perfect response to Ct?"], [16, "Ni hao, hola, hai, halo!"], [18, "If you genuinely don't know the answer to this, IT'S ASIN."], [19, "This organism can move several meters in a fifteenth of a yoctosecond. PvZ 2 victory sound!"], [20, "rupmuL alauK"]];
      const Dhints = [[2, "What word can be used to replace 'true' and 'false' at the same time?"], [3, "It's short for <b>Verenigde Oostindische Compagnie</b>."], [4, "His first name is George."], [6, "Sunday school videos when PSBB had just started in 2020."], [8, "The second letter is a."], [10, "Visit my Word Finder and use the command <b>6a</b>."], [12, "This includes cats with 2 differently colored eyes and/or fur, etc."], [13, "She taught BI and you have a sticker of her."], [14, "What I messaged when you set a status asking 'Who is this?'"], [17, "No hints for this one :)"], [21, "<img src='troll.png'>"]];
      for (hint of Ahints){
        $("#Ahints").innerHTML += `<details><summary>${hint[0]} Across</summary>${hint[1]}</details>`;
      }
      for (hint of Dhints){
        $("#Dhints").innerHTML += `<details><summary>${hint[0]} Down</summary>${hint[1]}</details>`;
      }
      click("t6done", function(){
        next(7);
        addLog("Mary got rickrolled :)");
      });
      click("repeat", function(){
        let i = [1, 3, 4, 5][$("#task").selectedIndex];
        addLog(`Mary chose to redo task ${i}!`);
        view("t" + i, 1);
        view("t7", 0);
        localStorage.setItem("cp", i);
        localStorage.setItem("redo", 1)
        switch ($("#task").selectedIndex){
          case 2:
            localStorage.setItem("cp", 1);
            break;
          case 3:
            t1 = localStorage.getItem("t");
            attackPinocchio();
            break;
        }
      });
    </script>
  </body>
</html>