<style type="text/css">
*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
		font-family: "Poppins", sans-serif;
		text-decoration: none;
		list-style: none;
		scroll-behavior: smooth;
	}
	:root{
		--bg-color: #2a2a2a;
		--second-bg-color: #202020;
		--red-color: #660000;
		--2text-color: #0d0d0d;
		--text-color: #fff;
		--second-color: #ccc;
		--yellow-color: #FFD700;
		--main-color: #ff4d05;
		--big-font: 5rem;
		--h2-font: 3rem;
		--p-font: 1.1rem;
	}
	body{
		background: var(--bg-color);
		color: var(--text-color);
	}

	

	 /*-------- header design -------*/
	header{
		position: fixed;
		width: 100%;
		top: 0;
		right: 0;
		z-index: 1000;
		display: flex;
		align-items: center;
		justify-content: space-between;
		background: transparent;
		padding: 22px 15%;
		border-bottom: 1px solid transparent;
		transition: all .45s ease;
		background: var(--red-color);
	}
	.logo{
		color: var(--text-color);	
		font-size: 35px;
		font-weight: 700;
		letter-spacing: 1px;
	}
	.yellow{
		color: var(--yellow-color);
	}
	#red {
		color: var(--red-color);
	}
	.navlist{
		display: flex;
	}
	.navlist a{
		color: var(--second-color);
		font-size: 17px;
		font-weight: 500;
		margin: 0 25px;
		transition: all .45s ease;
	}

	.navlist a:hover{
		color: var(--yellow-color);
	}

	.navlist a.active{
		color: var(--yellow-color);
	}

	#menu-icon{
		font-size: 35px;
		color: var(--text-color);
		z-index: 10001;
		cursor: pointer;
		margin-left: 25px;
		display: none;
	}	
	section{
		padding: 160px 15% 120px;
	}
	.login-btn{
		width: 200px;
		height: 50px;
		display: inline-block;
		font-size: 15px;
		background: var(--text-color);
		color: var(--2text-color);
		border: none;
		box-shadow: 1px 3px 10px;
		border-radius: 20px;
		transition: all .45 ease;
		cursor: pointer;
	}
	.login-btn:hover{
		background: var(--red-color);
		color: var(--text-color);
	}

	/**** account design *****/
	/*.home{
		position: relative;
		height: 100vh;
		width: 100%;
		background-image: url(centralpic/hrbuildingnew.jpg);
		background-size: cover;
		background-position: center;
		display: flex;
		align-items: center;
		justify-content: flex-start;
	}*/
	.home{
		padding-top: 8rem ;
		padding-bottom: 1rem;
		/*background:var(--second-color);
		padding: 35px 45px;
		border-radius: 8px;
		transition: all .45s ease;*/
	}

	.services-content{
		color: var(--2text-color);
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(250px,auto));
		justify-content: center;
		/*align-items: center;*/
		gap: 2.5rem;
		margin-top: 0.5rem;
	}

	.box {
		background: #ffff;
		padding: 35px 45px;
		border-radius: 8px;
		transition: all .45s ease;

	}

	.s-icons i {
		font-size: 32px;
		margin-bottom: 20px;
	}

	.box h3{
		font-size: 29px;
		font-weight: 600;
		color: var(--2text-color);

	}

	.box p{
		color: var(--2text-color);
		font-size: 1rem;
		line-height: 1.8;
		margin-bottom: 25px;
	}

.account{
	padding-top: 3rem ;
		padding-bottom: 1rem;
		background:var(--bg-color);
		height: 50vh;
		width: 100%;
		justify-content: center;
		/*padding: 35px 45px;
		border-radius: 8px;
		transition: all .45s ease;*/
}

.myacts {
	display: flex;
	justify-content: center;
	background: #FFD700;
}

.account .cback{
	background: var(--second-color);
}
/*.acts {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;   
  margin: 0 auto;
}*/



</style>