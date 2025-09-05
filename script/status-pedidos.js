 // Função para filtrar os pedidos por status
        function filtrarStatus(status) {
            const todosPedidos = document.querySelectorAll('.pedido-item');

            todosPedidos.forEach(pedido => {
                if (status === 'todos' || pedido.getAttribute('data-status') === status) {
                    pedido.style.display = 'block';
                } else {
                    pedido.style.display = 'none';
                }
            });

            const todosBotoes = document.querySelectorAll('.filter-btn');
            todosBotoes.forEach(btn => {
                btn.classList.remove('ativo');
            });

            const botaoAtivo = document.querySelector(filter-btn[onclick="filtrarStatus('${status}')"]);
            if (botaoAtivo) {
                botaoAtivo.classList.add('ativo');
            }
        }

        // Garante que a aba "Todos" comece ativa ao carregar a página
        document.addEventListener('DOMContentLoaded', function() {
            filtrarStatus('todos');
        });

        // Funções para controlar o Modal de Rastreio
        function abrirModalRastreio(numPedido, codRastreio) {
            document.getElementById('rastreio-pedido').innerText = numPedido;
            document.getElementById('rastreio-codigo').innerText = codRastreio;
            document.getElementById('modal-rastreio').style.display = 'flex';
        }

        function fecharModalRastreio() {
            document.getElementById('modal-rastreio').style.display = 'none';
        }