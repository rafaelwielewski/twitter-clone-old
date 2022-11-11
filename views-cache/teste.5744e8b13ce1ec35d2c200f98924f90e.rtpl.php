<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home/Twitter</title>
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="/Images/Tab-logo.png"
      class="tabbar"
    />
    <link rel="stylesheet" href="/CSS/style.css" />
    <link rel="stylesheet" href="/CSS/class.css" />
    <link rel="stylesheet" href="/CSS/media_query.css" />
  </head>
  <body>
    <header></header>
    <main>
      <div class="container">
        <div class="left">
          <div class="leftall">
            <nav>
              <a href="home.html">
                <img
                  src="/Images/White-twitter-logo.jpg"
                  alt=""
                  class="twitter leftallpd"
              /></a>
              <ul class="leftallpd">
                <div class="tabs">
                  <!-- Add images in nav bar -->
                  <li class="pageso homebar">
                    <div class="lisvg">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-home navsvg"
                      >
                        <path
                          d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                          class="homesvg allpsvg"
                        ></path>
                        <polyline
                          points="9 22 9 12 15 12 15 22"
                          class="allpsvg"
                        ></polyline>
                      </svg>
                    </div>
                    <div class="hometext pages">Home</div>
                  </li>
                  <li class="pageso">
                    <div class="lisvg">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-hash navsvg"
                      >
                        <line x1="4" y1="9" x2="20" y2="9"></line>
                        <line x1="4" y1="15" x2="20" y2="15"></line>
                        <line x1="10" y1="3" x2="8" y2="21"></line>
                        <line x1="16" y1="3" x2="14" y2="21"></line>
                      </svg>
                    </div>

                    <a href="explore.html" class="pages">Explore</a>
                  </li>
                  <li class="pageso">
                    <div class="lisvg">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-bell navsvg"
                      >
                        <path
                          d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"
                          class="notisvg allpsvg"
                        ></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                      </svg>
                    </div>

                    <a href="notification.html" class="pages">Notification</a>
                  </li>
                  <li class="pageso">
                    <div class="lisvg">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-mail navsvg"
                      >
                        <path
                          d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                          class="mainsvg allpsvg"
                        ></path>
                        <polyline
                          points="22,6 12,13 2,6"
                          class="mainsvg allpsvg"
                        ></polyline>
                      </svg>
                    </div>

                    <a href="messages.html" class="pages">Messages</a>
                  </li>
                  <li class="pageso">
                    <div class="lisvg">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-bookmark navsvg"
                      >
                        <path
                          d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                          class="booksvg allpsvg"
                        ></path>
                      </svg>
                    </div>

                    <a href="bookmark.html" class="pages">Bookmark</a>
                  </li>
                  <li class="pageso">
                    <div class="lisvg">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-list navsvg"
                      >
                        <line x1="8" y1="6" x2="21" y2="6"></line>
                        <line x1="8" y1="12" x2="21" y2="12"></line>
                        <line x1="8" y1="18" x2="21" y2="18"></line>
                        <line x1="3" y1="6" x2="3.01" y2="6"></line>
                        <line x1="3" y1="12" x2="3.01" y2="12"></line>
                        <line x1="3" y1="18" x2="3.01" y2="18"></line>
                      </svg>
                    </div>

                    <a href="list.html" class="pages">List</a>
                  </li>
                  <li class="pageso">
                    <div class="lisvg">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-user navsvg"
                      >
                        <path
                          d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
                          class="allpsvg"
                        ></path>
                        <circle cx="12" cy="7" r="4" class="allpsvg"></circle>
                      </svg>
                    </div>

                    <a href="profile.html" class="pages">Profile</a>
                  </li>
                  <li class="pageso">
                    <div class="lisvg">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-more-horizontal navsvg"
                      >
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="19" cy="12" r="1"></circle>
                        <circle cx="5" cy="12" r="1"></circle>
                      </svg>
                    </div>

                    <a href="more.html" class="pages">More</a>
                  </li>
                </div>
              </ul>
              <div class="tweetbox leftallpd">
                <div class="tweet"><a href="tweet.html">Tweet</a></div>
                <div class="parentmediatweetsvg">
                  <div class="mediatweetsvg">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      aria-hidden="true"
                      class="
                        tweetsvg
                        r-jwli3a
                        r-4qtqp9
                        r-yyyyoo
                        r-1q142lx
                        r-50lct3
                        r-dnmrzs
                        r-bnwqim
                        r-1plcrui
                        r-lrvibr
                        r-1srniue
                      "
                    >
                      <g>
                        <path
                          d="M8.8 7.2H5.6V3.9c0-.4-.3-.8-.8-.8s-.7.4-.7.8v3.3H.8c-.4 0-.8.3-.8.8s.3.8.8.8h3.3v3.3c0 .4.3.8.8.8s.8-.3.8-.8V8.7H9c.4 0 .8-.3.8-.8s-.5-.7-1-.7zm15-4.9v-.1h-.1c-.1 0-9.2 1.2-14.4 11.7-3.8 7.6-3.6 9.9-3.3 9.9.3.1 3.4-6.5 6.7-9.2 5.2-1.1 6.6-3.6 6.6-3.6s-1.5.2-2.1.2c-.8 0-1.4-.2-1.7-.3 1.3-1.2 2.4-1.5 3.5-1.7.9-.2 1.8-.4 3-1.2 2.2-1.6 1.9-5.5 1.8-5.7z"
                          class="mediatweetsvgpath"
                        ></path>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="name leftallpd">
                <div class="profileimg">
                  <img
                    src="https://i.pinimg.com/originals/de/bb/9c/debb9c69e89ef2b79baccff94642a034.jpg"
                    alt=""
                    class="pimg"
                  />
                </div>
                <div class="personname">Anmol Verma</div>
              </div>
            </nav>
          </div>
        </div>
        <div class="vline"></div>
        <div class="centre">
          <div class="centreall">
            <div class="home">
              <a href="home.html" class="linkstyle">Home</a>
              <a href="toptweet.html"></a>
            </div>
            <div class="hline"></div>
          </div>
          <div class="writetweet">
            <div class="profileimgcentre">
              <img
                src="https://i.pinimg.com/originals/de/bb/9c/debb9c69e89ef2b79baccff94642a034.jpg"
                alt=""
                class="pimgcentre"
              />
            </div>
            <div class="wtweet">
              <input
                type="text"
                name=""
                id=""
                class="witweet"
                placeholder="What's happening?"
              />
            </div>
            <div class="tweetpost">Tweet</div>
          </div>
          <div class="htline"></div>
          <div class="person2 otheruser">
            <div class="userdetails">
              <div class="otherpropic space-in-word-of-tweet">
                <img
                  src="https://source.unsplash.com/45x45/?boy"
                  alt="img"
                  class="otherimg"
                />
              </div>
              <div class="otherusername space-in-word-of-tweet">Joe Mama</div>
              <div class="otherusertag space-in-word-of-tweet">@joemama</div>
              <div class="uplodetime space-in-word-of-tweet">11m</div>
            </div>

            <div class="usercontent">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Necessitatibus reprehenderit similique numquam maiores! Nemo,
              alias placeat. Unde ratione quasi, eaque molestias quo sunt autem
              corrupti neque eligendi, alias ad quas!
            </div>
            <div class="userupimage">
              <img
                src="https://source.unsplash.com/480x360/?fruit"
                alt="img"
                class="givenimage"
              />
            </div>
            <div class="usertweetoptions">
              <div class="replybox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-message-circle"
                >
                  <path
                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
                    class="reply"
                  />
                </svg>
                <div class="replycount">117</div>
              </div>
              <div class="replybox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-repeat"
                >
                  <polyline points="17 1 21 5 17 9"></polyline>
                  <path d="M3 11V9a4 4 0 0 1 4-4h14" class="retgreen"></path>
                  <polyline points="7 23 3 19 7 15"></polyline>
                  <path d="M21 13v2a4 4 0 0 1-4 4H3" class="retgreen"></path>
                </svg>
                <div class="tweetcount">187</div>
              </div>
              <div class="replybox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-heart"
                >
                  <path
                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
                    class="heartred"
                  ></path>
                </svg>
                <div class="heartcount">7.9k</div>
              </div>
              <div class="replybox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-share"
                >
                  <path
                    d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"
                    class="reply"
                  ></path>
                  <polyline points="16 6 12 2 8 6"></polyline>
                  <line x1="12" y1="2" x2="12" y2="15"></line>
                </svg>
              </div>
            </div>
          </div>
          <div class="htline"></div>
          <div class="person3 otheruser">
            <div class="userdetails">
              <div class="otherpropic space-in-word-of-tweet">
                <img
                  src="https://source.unsplash.com/45x45/?girl"
                  alt="img"
                  class="otherimg"
                />
              </div>
              <div class="otherusername space-in-word-of-tweet">Meme Girl</div>
              <div class="otherusertag space-in-word-of-tweet">@memegirl</div>
              <div class="uplodetime space-in-word-of-tweet">17m</div>
            </div>

            <div class="usercontent">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil
              excepturi inventore ullam ipsa qui animi? Quo nesciunt eos earum
              rem sunt nam doloremque, illo, magnam labore error architecto amet
              culpa enim aut nulla. Reiciendis eum nihil dignissimos, harum quae
              pariatur, eveniet temporibus explicabo deleniti a, modi culpa.
              Autem laboriosam iure aliquam quaerat, harum laudantium obcaecati.
            </div>
            <div class="userupimage">
              <img
                src="https://source.unsplash.com/480x360/?garden"
                alt="img"
                class="givenimage"
              />
            </div>
            <div class="usertweetoptions">
              <div class="replybox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-message-circle"
                >
                  <path
                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
                    class="reply"
                  />
                </svg>
                <div class="replycount">107</div>
              </div>
              <div class="replybox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-repeat"
                >
                  <polyline points="17 1 21 5 17 9"></polyline>
                  <path d="M3 11V9a4 4 0 0 1 4-4h14" class="retgreen"></path>
                  <polyline points="7 23 3 19 7 15"></polyline>
                  <path d="M21 13v2a4 4 0 0 1-4 4H3" class="retgreen"></path>
                </svg>
                <div class="tweetcount">203</div>
              </div>
              <div class="replybox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-heart"
                >
                  <path
                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
                    class="heartred"
                  ></path>
                </svg>
                <div class="heartcount">1.3k</div>
              </div>
              <div class="replybox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-share"
                >
                  <path
                    d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"
                    class="reply"
                  ></path>
                  <polyline points="16 6 12 2 8 6"></polyline>
                  <line x1="12" y1="2" x2="12" y2="15"></line>
                </svg>
              </div>
            </div>
          </div>
          <div class="htline"></div>
          <div class="person4 otheruser">
            <div class="userdetails">
              <div class="otherpropic space-in-word-of-tweet">
                <img
                  src="https://source.unsplash.com/45x45/?trump"
                  alt="img"
                  class="otherimg"
                />
              </div>
              <div class="otherusername space-in-word-of-tweet">
                Donald Trump
              </div>
              <div class="otherusertag space-in-word-of-tweet">
                @DonaldTrump
              </div>
              <div class="uplodetime space-in-word-of-tweet">20m</div>
            </div>

            <div class="usercontent">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo in
              sint vitae ut alias!
            </div>
            <div class="userupimage">
              <img
                src="https://source.unsplash.com/480x360/?trump"
                alt="img"
                class="givenimage"
              />
            </div>
            <div class="usertweetoptions">
              <div class="replybox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-message-circle"
                >
                  <path
                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
                    class="reply"
                  />
                </svg>
                <div class="replycount">854</div>
              </div>
              <div class="replybox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-repeat"
                >
                  <polyline points="17 1 21 5 17 9"></polyline>
                  <path d="M3 11V9a4 4 0 0 1 4-4h14" class="retgreen"></path>
                  <polyline points="7 23 3 19 7 15"></polyline>
                  <path d="M21 13v2a4 4 0 0 1-4 4H3" class="retgreen"></path>
                </svg>
                <div class="tweetcount">455</div>
              </div>
              <div class="replybox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-heart"
                >
                  <path
                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
                    class="heartred"
                  ></path>
                </svg>
                <div class="heartcount">23.7k</div>
              </div>
              <div class="replybox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-share"
                >
                  <path
                    d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"
                    class="reply"
                  ></path>
                  <polyline points="16 6 12 2 8 6"></polyline>
                  <line x1="12" y1="2" x2="12" y2="15"></line>
                </svg>
              </div>
            </div>
          </div>
          <div class="htline"></div>
        </div>
        <div class="vline"></div>
        <div class="right">
          <div class="searchtwitter">
            <div class="search">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-search"
              >
                <circle cx="11" cy="11" r="8" class="searchsvg"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              </svg>
              <input
                type="text"
                placeholder="Search Twitter"
                class="intwitter__search__textbox"
              />
            </div>
          </div>
          <div class="whatshappiningcontainer">
            <div class="whatshappining">
              <h3 class="trending">What's happining</h3>
              <div class="hline"></div>
              <div class="trending trendingbox">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta,
                est?
              </div>
              <div class="hline"></div>
              <div class="trending trendingbox">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
                quisquam commodi?
              </div>
              <div class="hline"></div>
              <div class="trending trendingbox">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam
                quidem at, quis, optio sint dignissimos dolor soluta ex, modi
                ipsam recusandae reprehenderit?
              </div>
              <div class="hline"></div>
              <div class="trending trendingbox">
                Lorem ipsum dolor sit amet.
              </div>
              <div class="hline"></div>
              <div class="trending trendingbox">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                corrupti ea est. Quam, illum molestiae. Delectus esse quas in id
                numquam quae mollitia aliquid iure reiciendis! At porro ut
                quaerat.
              </div>
              <div class="hline"></div>
              <div class="showmore trending trendingbox">Show More</div>
            </div>
          </div>
          <div class="whotofollow">
            <div class="boxwhotofollow">
              <h2 class="headlinewhotofollow"><b>Who to follow</b></h2>
              <div class="hline"></div>
              <div class="tofollowone tofollow">
                <div class="tofollowleft">
                  <div class="tofollowprofileimg">
                    <img
                      src="https://paganresearch.io/images/SpaceX.jpg"
                      alt="SpaceX"
                    />
                  </div>
                  <div class="tofollowname">
                    <div class="nametofollow">SpaceX</div>
                    <div class="adressnametofollow">@SpaceX</div>
                  </div>
                  <div class="tick">
                    <svg
                      height="12pt"
                      viewBox="0 0 496 496.01461"
                      width="12pt"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="m494.492188 243.308594-37.25-51.386719 6.601562-63.109375c.359375-3.449219-1.539062-6.734375-4.707031-8.144531l-57.980469-25.800781-25.800781-57.984376c-1.417969-3.160156-4.699219-5.054687-8.144531-4.710937l-63.121094 6.597656-51.382813-37.246093c-2.800781-2.03125-6.589843-2.03125-9.390625 0l-51.386718 37.246093-63.117188-6.597656c-3.441406-.328125-6.710938 1.5625-8.144531 4.703125l-25.800781 57.984375-57.984376 25.808594c-3.164062 1.40625-5.0625 4.691406-4.703124 8.136719l6.597656 63.117187-37.246094 51.386719c-2.03125 2.800781-2.03125 6.589844 0 9.390625l37.246094 51.382812-6.597656 63.121094c-.363282 3.445313 1.535156 6.734375 4.703124 8.144531l57.984376 25.800782 25.800781 57.984374c1.425781 3.148438 4.699219 5.042969 8.144531 4.710938l63.117188-6.601562 51.386718 37.25c2.800782 2.03125 6.589844 2.03125 9.390625 0l51.382813-37.25 63.121094 6.601562c3.445312.347656 6.722656-1.546875 8.144531-4.703125l25.800781-57.984375 57.980469-25.808594c3.164062-1.410156 5.0625-4.691406 4.707031-8.136718l-6.601562-63.121094 37.25-51.382813c2.035156-2.800781 2.035156-6.597656 0-9.398437zm-52 53.863281c-1.160157 1.597656-1.6875 3.566406-1.480469 5.527344l6.304687 60.382812-55.480468 24.699219c-1.8125.796875-3.265626 2.242188-4.066407 4.054688l-24.679687 55.480468-60.398438-6.3125c-1.960937-.203125-3.925781.328125-5.519531 1.488282l-49.160156 35.632812-49.167969-35.632812c-1.363281-.996094-3.003906-1.53125-4.6875-1.527344-.28125 0-.5625 0-.800781.039062l-60.402344 6.3125-24.679687-55.480468c-.804688-1.8125-2.25-3.261719-4.0625-4.066407l-55.511719-24.6875 6.304687-60.382812c.203125-1.960938-.324218-3.929688-1.480468-5.527344l-35.632813-49.167969 35.632813-49.167968c1.15625-1.597657 1.683593-3.566407 1.480468-5.527344l-6.304687-60.386719 55.480469-24.695313c1.8125-.796874 3.261718-2.242187 4.0625-4.054687l24.679687-55.480469 60.402344 6.3125c1.957031.195313 3.921875-.335937 5.519531-1.488281l49.167969-35.632813 49.167969 35.632813c1.59375 1.15625 3.558593 1.683594 5.519531 1.488281l60.398437-6.3125 24.679688 55.480469c.804687 1.8125 2.253906 3.257813 4.066406 4.0625l55.480469 24.6875-6.304688 60.386719c-.207031 1.960937.320313 3.929687 1.480469 5.527344l35.628906 49.167968zm0 0"
                        class="ticksvg"
                      />
                      <path
                        d="m341.425781 157.308594c-3.125-3.125-8.1875-3.125-11.3125 0l-130.101562 130.101562-39.625-39.550781c-3.121094-3.113281-8.175781-3.113281-11.296875 0l-22.679688 22.542969c-1.503906 1.5-2.351562 3.539062-2.351562 5.664062s.847656 4.164063 2.351562 5.664063l67.921875 67.921875c3.121094 3.121094 8.1875 3.121094 11.3125 0l158.398438-158.402344c3.121093-3.121094 3.121093-8.1875 0-11.3125zm-141.414062 175.382812-56.601563-56.601562 11.3125-11.285156 39.640625 39.558593c3.121094 3.117188 8.179688 3.117188 11.304688 0l130.101562-130.089843 11.328125 11.328124zm0 0"
                        class="ticksvg"
                      />
                    </svg>
                  </div>
                </div>

                <div class="followbuttonbox">
                  <div class="tofollowbutton">Follow</div>
                </div>
              </div>
              <div class="hline"></div>
              <div class="tofollowtwo tofollow">
                <div class="tofollowleft">
                  <div class="tofollowprofileimg">
                    <img
                      src="https://yt3.ggpht.com/ytc/AAUvwnh7CHDDIuu6a87VwcIoDe-UeDb-Cfu8Ig8utAcGBDw=s900-c-k-c0x00ffffff-no-rj"
                      alt="Narendra Modi"
                    />
                  </div>
                  <div class="tofollowname">
                    <div class="nametofollow">Narendra Modi</div>
                    <!-- <div class="mqnametofollow">Nar...</div> -->
                    <div class="adressnametofollow">@NarendraModi</div>
                  </div>
                  <div class="tick">
                    <svg
                      height="12pt"
                      viewBox="0 0 496 496.01461"
                      width="12pt"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="m494.492188 243.308594-37.25-51.386719 6.601562-63.109375c.359375-3.449219-1.539062-6.734375-4.707031-8.144531l-57.980469-25.800781-25.800781-57.984376c-1.417969-3.160156-4.699219-5.054687-8.144531-4.710937l-63.121094 6.597656-51.382813-37.246093c-2.800781-2.03125-6.589843-2.03125-9.390625 0l-51.386718 37.246093-63.117188-6.597656c-3.441406-.328125-6.710938 1.5625-8.144531 4.703125l-25.800781 57.984375-57.984376 25.808594c-3.164062 1.40625-5.0625 4.691406-4.703124 8.136719l6.597656 63.117187-37.246094 51.386719c-2.03125 2.800781-2.03125 6.589844 0 9.390625l37.246094 51.382812-6.597656 63.121094c-.363282 3.445313 1.535156 6.734375 4.703124 8.144531l57.984376 25.800782 25.800781 57.984374c1.425781 3.148438 4.699219 5.042969 8.144531 4.710938l63.117188-6.601562 51.386718 37.25c2.800782 2.03125 6.589844 2.03125 9.390625 0l51.382813-37.25 63.121094 6.601562c3.445312.347656 6.722656-1.546875 8.144531-4.703125l25.800781-57.984375 57.980469-25.808594c3.164062-1.410156 5.0625-4.691406 4.707031-8.136718l-6.601562-63.121094 37.25-51.382813c2.035156-2.800781 2.035156-6.597656 0-9.398437zm-52 53.863281c-1.160157 1.597656-1.6875 3.566406-1.480469 5.527344l6.304687 60.382812-55.480468 24.699219c-1.8125.796875-3.265626 2.242188-4.066407 4.054688l-24.679687 55.480468-60.398438-6.3125c-1.960937-.203125-3.925781.328125-5.519531 1.488282l-49.160156 35.632812-49.167969-35.632812c-1.363281-.996094-3.003906-1.53125-4.6875-1.527344-.28125 0-.5625 0-.800781.039062l-60.402344 6.3125-24.679687-55.480468c-.804688-1.8125-2.25-3.261719-4.0625-4.066407l-55.511719-24.6875 6.304687-60.382812c.203125-1.960938-.324218-3.929688-1.480468-5.527344l-35.632813-49.167969 35.632813-49.167968c1.15625-1.597657 1.683593-3.566407 1.480468-5.527344l-6.304687-60.386719 55.480469-24.695313c1.8125-.796874 3.261718-2.242187 4.0625-4.054687l24.679687-55.480469 60.402344 6.3125c1.957031.195313 3.921875-.335937 5.519531-1.488281l49.167969-35.632813 49.167969 35.632813c1.59375 1.15625 3.558593 1.683594 5.519531 1.488281l60.398437-6.3125 24.679688 55.480469c.804687 1.8125 2.253906 3.257813 4.066406 4.0625l55.480469 24.6875-6.304688 60.386719c-.207031 1.960937.320313 3.929687 1.480469 5.527344l35.628906 49.167968zm0 0"
                        class="ticksvg"
                      />
                      <path
                        d="m341.425781 157.308594c-3.125-3.125-8.1875-3.125-11.3125 0l-130.101562 130.101562-39.625-39.550781c-3.121094-3.113281-8.175781-3.113281-11.296875 0l-22.679688 22.542969c-1.503906 1.5-2.351562 3.539062-2.351562 5.664062s.847656 4.164063 2.351562 5.664063l67.921875 67.921875c3.121094 3.121094 8.1875 3.121094 11.3125 0l158.398438-158.402344c3.121093-3.121094 3.121093-8.1875 0-11.3125zm-141.414062 175.382812-56.601563-56.601562 11.3125-11.285156 39.640625 39.558593c3.121094 3.117188 8.179688 3.117188 11.304688 0l130.101562-130.089843 11.328125 11.328124zm0 0"
                        class="ticksvg"
                      />
                    </svg>
                  </div>
                </div>
                <div class="followbuttonbox">
                  <div class="tofollowbutton">Follow</div>
                </div>
              </div>
              <div class="hline"></div>
              <div class="tofollowthree tofollow">
                <div class="tofollowleft">
                  <div class="tofollowprofileimg">
                    <img
                      src="https://pbs.twimg.com/profile_images/1111257701835788290/7U7PLuAK.jpg"
                      alt="Kevin Powell"
                    />
                  </div>
                  <div class="tofollowname">
                    <div class="nametofollow">Kevin Powell</div>
                    <div class="adressnametofollow">@KevinJPowell</div>
                  </div>
                  <div class="tick">
                    <svg
                      height="12pt"
                      viewBox="0 0 496 496.01461"
                      width="12pt"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="m494.492188 243.308594-37.25-51.386719 6.601562-63.109375c.359375-3.449219-1.539062-6.734375-4.707031-8.144531l-57.980469-25.800781-25.800781-57.984376c-1.417969-3.160156-4.699219-5.054687-8.144531-4.710937l-63.121094 6.597656-51.382813-37.246093c-2.800781-2.03125-6.589843-2.03125-9.390625 0l-51.386718 37.246093-63.117188-6.597656c-3.441406-.328125-6.710938 1.5625-8.144531 4.703125l-25.800781 57.984375-57.984376 25.808594c-3.164062 1.40625-5.0625 4.691406-4.703124 8.136719l6.597656 63.117187-37.246094 51.386719c-2.03125 2.800781-2.03125 6.589844 0 9.390625l37.246094 51.382812-6.597656 63.121094c-.363282 3.445313 1.535156 6.734375 4.703124 8.144531l57.984376 25.800782 25.800781 57.984374c1.425781 3.148438 4.699219 5.042969 8.144531 4.710938l63.117188-6.601562 51.386718 37.25c2.800782 2.03125 6.589844 2.03125 9.390625 0l51.382813-37.25 63.121094 6.601562c3.445312.347656 6.722656-1.546875 8.144531-4.703125l25.800781-57.984375 57.980469-25.808594c3.164062-1.410156 5.0625-4.691406 4.707031-8.136718l-6.601562-63.121094 37.25-51.382813c2.035156-2.800781 2.035156-6.597656 0-9.398437zm-52 53.863281c-1.160157 1.597656-1.6875 3.566406-1.480469 5.527344l6.304687 60.382812-55.480468 24.699219c-1.8125.796875-3.265626 2.242188-4.066407 4.054688l-24.679687 55.480468-60.398438-6.3125c-1.960937-.203125-3.925781.328125-5.519531 1.488282l-49.160156 35.632812-49.167969-35.632812c-1.363281-.996094-3.003906-1.53125-4.6875-1.527344-.28125 0-.5625 0-.800781.039062l-60.402344 6.3125-24.679687-55.480468c-.804688-1.8125-2.25-3.261719-4.0625-4.066407l-55.511719-24.6875 6.304687-60.382812c.203125-1.960938-.324218-3.929688-1.480468-5.527344l-35.632813-49.167969 35.632813-49.167968c1.15625-1.597657 1.683593-3.566407 1.480468-5.527344l-6.304687-60.386719 55.480469-24.695313c1.8125-.796874 3.261718-2.242187 4.0625-4.054687l24.679687-55.480469 60.402344 6.3125c1.957031.195313 3.921875-.335937 5.519531-1.488281l49.167969-35.632813 49.167969 35.632813c1.59375 1.15625 3.558593 1.683594 5.519531 1.488281l60.398437-6.3125 24.679688 55.480469c.804687 1.8125 2.253906 3.257813 4.066406 4.0625l55.480469 24.6875-6.304688 60.386719c-.207031 1.960937.320313 3.929687 1.480469 5.527344l35.628906 49.167968zm0 0"
                        class="ticksvg"
                      />
                      <path
                        d="m341.425781 157.308594c-3.125-3.125-8.1875-3.125-11.3125 0l-130.101562 130.101562-39.625-39.550781c-3.121094-3.113281-8.175781-3.113281-11.296875 0l-22.679688 22.542969c-1.503906 1.5-2.351562 3.539062-2.351562 5.664062s.847656 4.164063 2.351562 5.664063l67.921875 67.921875c3.121094 3.121094 8.1875 3.121094 11.3125 0l158.398438-158.402344c3.121093-3.121094 3.121093-8.1875 0-11.3125zm-141.414062 175.382812-56.601563-56.601562 11.3125-11.285156 39.640625 39.558593c3.121094 3.117188 8.179688 3.117188 11.304688 0l130.101562-130.089843 11.328125 11.328124zm0 0"
                        class="ticksvg"
                      />
                    </svg>
                  </div>
                </div>
                <div class="followbuttonbox">
                  <div class="tofollowbutton">Follow</div>
                </div>
              </div>
              <div class="seemoretofollow tofollow">See More</div>
            </div>
          </div>
          <div class="copyright">
            <!-- <div class="hline"></div> -->
            <div class="termsser">
              <p>Terms of services</p>
              <p>Privacy Policies</p>
              <p>Cookie Policy</p>
            </div>
            <div class="addcopyright">
              <p>Add Info</p>
              <p>More...</p>
              <p>&copy;2021 Twitter,Inc.</p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer></footer>
  </body>
</html>
