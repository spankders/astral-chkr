      //message=> 
      //status=> Você tem mais 1 info aprovada.
      //progress=> "Transação autorizada com sucesso!
      //se nao me engano e por timeout
      function notifyMe(message, status, progress) {
          if (!("Notification" in window)) {
              alert("This browser does not support desktop notification");
          }else if (Notification.permission === "granted") {
              var options = {
                  body: message,
                  icon: "arquivos/imagens/notificacao.jpg",
                  dir: "auto"
              };
              var notification = new Notification("#unniROOT " + status, options);
          }else if (Notification.permission !== 'denied') {
              Notification.requestPermission(function(permission) {
                  if (!('permission' in Notification)) {
                      Notification.permission = permission;
                  }
                  if (permission === "granted") {
                      var options = {
                          body: progress,
                             icon: "arquivos/imagens/notificacao.jpg",
                          dir: "auto"
                      };
				  var notification = new Notification("#unniROOT " + status, options);
                  }
              });
          }

      }

      //
      var audio = new Audio('arquivos/audio/blop.mp3');
      var audio2 = new Audio('arquivos/audio/bot.mp3');


      function limpar() {
          var lista = $('#lista').val();
          if (lista.length == 0) {
              document.getElementById("demo").innerHTML = '<div class="label label-warning label-dismissible">Carregue a lista antes de limpa-la!</div>';
              notifyMe("O campo não contém nenhuma lista para ser limpa", "Erro ao limpar a lista de checagem.");
              audio2.play();
              return;
          } else {
              document.getElementById("lista").value = '';
              document.getElementById("demo").innerHTML = '<div class="label label-info label-dismissible">Lista limpa.</div>';
              audio.play();
              notifyMe("Todas as lista que estavam na sua lista foram limpas!", "Lista limpa.");
          }
      }

      function rmLinha(id) {
          var lines = $(id).val().split('\n');
          lines.splice(0, 1);
          $(id).val(lines.join("\n"));
      }

       function play(){
             audio = document.getElementById('audio');
             audio.load();
             audio.play();
    }
      function start() {
          var lista = $('#lista').val();
          if (lista.length == 0) {
              document.getElementById("demo").innerHTML = '<div class="label label-warning label-dismissible">Carregue a lista!</div>';
              notifyMe("Você precisa carregar uma lista antes de iniciar o testador!", "Erro ao iniciar.");
              audio2.play();
              return;
          } else {
              document.getElementById("demo").innerHTML = '<div class="label label-success label-dismissible">Iniciado.</div>';
              audio.play();
              notifyMe("Sua lista para checagem das cc's foi enviada com sucesso, estamos iniciando o testador!", "Iniciando testes.");
          }
          var i;
          var lista = $('#lista').val();
          var cc = lista.split("\n");
          var separador = $('#separador').val();
          for (i = 0; i < cc.length; i++) {
              var cc2 = cc[i];
              var id = i;
              check(cc2, separador, id);
          }
      function stop() {
              document.getElementById("demo").innerHTML = '<div class="label label-warning label-dismissible">Carregue a lista!</div>';
              notifyMe("Você precisa carregar uma lista antes de iniciar o testador!", "Erro ao iniciar.");
              audio2.play();
          }

          //document.getElementById("pgstr").style.display = "block";
          var textarea = document.getElementById("lista").value;
          // var textareacount = textarea.split("\n");
          var textareacount = textarea.split('\n');
          var textareaMatch = count(textareacount, 'COUNT_RECURSIVE');
          //Check
          var myString = textarea;
          var myArray = listToArray(myString, '\n');

          //document.getElementById("demo").innerHTML = '';
          document.getElementById("carregada").innerHTML = textareaMatch;
          for (var i = 0; i < textareaMatch; i++) {

              var cclst = myArray[i];
              var cemail = cclst.split("|");
              var csids = 'csid_' + i;
              var ccids = 'ccid_' + i;

              var output = document.getElementById("lista").value;
              output = output.replace(cclst, "");
              output = output.replace("\n", "");
              document.getElementById("lista").innerHTML = output;
          }



      }

      function check(cc2, separador, id) {
                    var xmlhttp;
                        xmlhttp=new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                            var xdata = xmlhttp.responseText;     
                        if (xdata.match("Aprovada")) {
                          document.getElementById("testado").innerHTML = (eval(document.getElementById("testado").innerHTML) + 1);
                          document.getElementById("CLIVE").innerHTML = (eval(document.getElementById("CLIVE").innerHTML) + 1);
                          $("#aprovadas").append(xdata);
                          rmLinha('#lista');
                          notifyMe("Você tem mais 1 info aprovada.", "Transação autorizada com sucesso!");
                          play();
                          console.log('{"Success":"', document.getElementById("testado").innerHTML, '":"true"}')

                      } else if (xdata.match("Reprovada")) {
                          document.getElementById("testado").innerHTML = (eval(document.getElementById("testado").innerHTML) + 1);
                           document.getElementById("CDIE").innerHTML = (eval(document.getElementById("CDIE").innerHTML) + 1);
                          $("#reprovadas").append(xdata);
                          rmLinha('#lista');
                          console.log('{"Success":"', document.getElementById("testado").innerHTML, '":"false"}')
                           }
                         }
                      }
                    xmlhttp.open("GET","api.php?lista=" + cc2 ,true);
                    xmlhttp.send();
      }

      function SelectAll(id) {
          document.getElementById(id).focus();
          document.getElementById(id).select();
      }


      function listToArray(fullString, separator) {
          var fullArray = [];

          if (fullString !== undefined) {
              if (fullString.indexOf(separator) == -1) {
                  fullArray.push(fullString);
              } else {
                  fullArray = fullString.split(separator);
              }
          }

          return fullArray;
      }

      function count(mixed_var, mode) {
          var key, cnt = 0;
          if (mixed_var === null || typeof mixed_var === 'undefined') {
              return 0;
          } else if (mixed_var.constructor !== Array && mixed_var.constructor !== Object) {
              return 1;
          }
          if (mode === 'COUNT_RECURSIVE') {
              mode = 1;
          }
          if (mode != 1) {
              mode = 0;
          }
          for (key in mixed_var) {
              if (mixed_var.hasOwnProperty(key)) {
                  cnt++;
                  if (mode == 1 && mixed_var[key] && (mixed_var[key].constructor === Array || mixed_var[key].constructor ===
                          Object)) {
                      cnt += this.count(mixed_var[key], 1);
                  }
              }
          }
          return cnt;
      }

      function pushcsB(c, p) {
          document.getElementById(p).innerHTML = document.getElementById(p).innerHTML + c + "\n<br>";
      }