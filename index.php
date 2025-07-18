<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMGN.AI | 极速交易，跟单交易，自动化交易</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="src/style.css">
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <a href="#"><img src="/images/GMGNLogo.webp" alt="GMGN.AI Logo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="#">掘金</a></li>
                <li><a href="#">新币对</a></li>
                <li><a href="#">趋势</a></li>
                <li><a href="#">跟单交易</a></li>
                <li><a href="#">投资组合</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="搜索代币 / 合约 / 钱包地址">
        </div>
        <div class="user-actions">
            <button>零手续费 (SOL)</button>
            <a href="#" class="trade-button">交易官方 $PUMP</a>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>秒级发现，极速交易</h1>
                <p>追踪聪明钱和意见领袖，发现未来热门资产，GMGN 助您领先一步！</p>
                <a href="#" class="windows-download-button">
                    <img src="/images/apple-logo.svg" alt="Windows 图标">
                    <span>Windows 下载</span>
                </a>
            </div>
        </section>
        <section class="token-market">
            <div class="tabs">
                <button class="tab-link active" data-tab="trending">热门趋势</button>
                <button class="tab-link" data-tab="new-pairs">最新币对</button>
                <button class="tab-link" data-tab="watchlist">我的关注</button>
            </div>
            <div id="trending" class="tab-content active">
                <table class="market-table">
                    <thead>
                        <tr>
                            <th>代币</th>
                            <th>价格</th>
                            <th>24小时变动</th>
                            <th>24小时交易量</th>
                            <th>流动性</th>
                            <th>上线时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><div class="token-info"><img src="/images/token-btc.png" alt=""><span>Bitcoin</span>BTC</div></td>
                            <td>$68,123.45</td>
                            <td class="positive">+1.2%</td>
                            <td>$450亿</td>
                            <td>$1.3万亿</td>
                            <td>15年</td>
                            <td><button class="btn-trade">交易</button><button class="btn-details">详情</button></td>
                        </tr>
                         <tr>
                            <td><div class="token-info"><img src="/images/token-eth.png" alt=""><span>Ethereum</span>ETH</div></td>
                            <td>$3,567.89</td>
                            <td class="negative">-0.5%</td>
                            <td>$220亿</td>
                            <td>$4280亿</td>
                            <td>9年</td>
                            <td><button class="btn-trade">交易</button><button class="btn-details">详情</button></td>
                        </tr>
                        <tr>
                            <td><div class="token-info"><img src="/images/token-1.png" alt=""><span>Solana</span>SOL</div></td>
                            <td>$172.45</td>
                            <td class="positive">+5.8%</td>
                            <td>$34亿</td>
                            <td>$12亿</td>
                            <td>3年</td>
                            <td><button class="btn-trade">交易</button><button class="btn-details">详情</button></td>
                        </tr>
                        <tr>
                            <td><div class="token-info"><img src="/images/token-2.png" alt=""><span>DogWifHat</span>WIF</div></td>
                            <td>$3.81</td>
                            <td class="negative">-2.1%</td>
                            <td>$8.9亿</td>
                            <td>$4.5亿</td>
                            <td>8个月</td>
                            <td><button class="btn-trade">交易</button><button class="btn-details">详情</button></td>
                        </tr>
                        <tr>
                            <td><div class="token-info"><img src="/images/token-3.png" alt=""><span>Pepe</span>PEPE</div></td>
                            <td>$0.0000118</td>
                            <td class="positive">+12.4%</td>
                            <td>$11亿</td>
                            <td>$5亿</td>
                            <td>1年</td>
                            <td><button class="btn-trade">交易</button><button class="btn-details">详情</button></td>
                        </tr>
                         <tr>
                            <td><div class="token-info"><img src="/images/token-4.png" alt=""><span>Bonk</span>BONK</div></td>
                            <td>$0.000028</td>
                            <td class="positive">+7.2%</td>
                            <td>$4.5亿</td>
                            <td>$2亿</td>
                            <td>1年</td>
                            <td><button class="btn-trade">交易</button><button class="btn-details">详情</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="testimonials">
            <h2>听听用户的声音</h2>
            <div class="swiper-container testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial">
                             <a href="#">
                                <img src="/images/avatar-1.png" alt="用户头像">
                                <h3>Meraki Crypto</h3>
                                <p>@merakicrypto_</p>
                                <p>Gmgn 非常棒，速度是快速入场的关键。我用它来做我的挑战钱包，目前已经把100美元变成了1.3万美元...</p>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                             <a href="#">
                                <img src="/images/avatar-2.png" alt="用户头像">
                                <h3>Dior</h3>
                                <p>@Dior100x</p>
                                <p>我找到了一个交易机器人 (GMGN.AI)，它集 Meme 发现、追踪和 TG 机器人交易于一体，我已经用了一段时间了...</p>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                             <a href="#">
                                <img src="/images/avatar-3.png" alt="用户头像">
                                <h3>Sibel</h3>
                                <p>@sibeleth</p>
                                <p>你是如何赚钱的？当然是使用一个快速、安全又简单的 TG 交易机器人！我很高兴地宣布我与 @gmgnai 合作了...</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column footer-main">
                <a href="#" class="footer-logo"><img src="/images/GMGNLogo.webp" alt="GMGN.AI Logo"></a>
                <p class="footer-disclaimer">投资有风险，入市需谨慎。本网站信息仅供参考，不构成任何投资建议。</p>
            </div>
            <div class="footer-column">
                <h4>产品</h4>
                <ul>
                    <li><a href="#">趋势</a></li>
                    <li><a href="#">新币对</a></li>
                    <li><a href="#">xStocks</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>工具</h4>
                <ul>
                    <li><a href="#">跟单交易</a></li>
                    <li><a href="#">狙击X</a></li>
                    <li><a href="#">监控</a></li>
                    <li><a href="#">追踪</a></li>
                    <li><a href="#">投资组合</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>支持</h4>
                <ul>
                    <li><a href="#">文档</a></li>
                    <li><a href="#">关于我们</a></li>
                    <li><a href="#">Telegram 机器人</a></li>
                    <li><a href="#">API</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>社区</h4>
                <div class="social-icons">
                    <a href="#"><img src="https://ext.same-assets.com/2001867129/1260165555.svg" alt="Twitter"></a>
                    <a href="#"><img src="https://ext.same-assets.com/2001867129/4199658565.svg" alt="Telegram"></a>
                    <a href="#"><img src="https://ext.same-assets.com/2001867129/2137065226.svg" alt="Discord"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 GMGN.AI 版权所有</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="src/script.js"></script>
</body>
</html>